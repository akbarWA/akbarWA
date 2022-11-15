<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data sekolah</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    <h1>Data </h1>
    <?php
        if(@$_GET['pesan']=="inputBerhasil"){

    ?>
        <div class="alert alert-success">
            Penyimpanan Berhasil!
        </div>
    <?php
        }
    ?>

<?php
        if(@$_GET['pesan']=="HapusBerhasil"){

    ?>
        <div class="alert alert-success">
            Data Berhasil Dihapus!
        </div>
    <?php
        }
    ?>


    <table id="dataTables" class="table table-bordered">
    <thead>
        <tr>
            <td>NIM</td><td>NAMA</td><td>JENIS KELAMIN</td><td>ALAMAT</td>
            <th>
                <a href="input-mahasiswa1.php">
                    <button class="btn btn-info glyphicon glyphicon-plus"></button>
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi1.php";
        $sql=$koneksi->query("SELECT * FROM mahasiswa order by nim ASC");

        while ($row= $sql->fetch_assoc()) {
        # code...
        
    
    ?>
        <tr>
            <td><?php echo $row ['nim']?></td>
            <td><?php echo $row ['nama']?></td>
            <td><?php echo $row ['jenis_kelamin']?></td>
            <td><?php echo $row ['alamat']?></td>
            <td>
                <a href="edit-mahasiswa.php">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>
                <a href="hapus-mahasiswa.php?id=<?php echo $row['mahasiswa_id']?>" onclick=" retrun confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-remove"></button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>

    </table>
    <br><br>

    <a href="logout.php">logout</a> 

    

    <script src="bootstrap/js/jQuery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="//DataTables-1.13.1/css/jquery.dataTables.min.css"></script>
    <script src="//DataTables-1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    

    <script>
        $(document).ready( function () {
    $('#dataTables').DataTable();
    } );

    </script>
        </div>
    </div>
</div>
</body>
</html>
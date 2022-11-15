<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>edit berhasil MAHASISWA</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<form action="proses-edit-mahasiswa.php"  method="POST">

					<?php
				$id=$_GET['id'];
				include "koneksi1.php";
				$tampil=$koneksi->query("select * from mahasiswa where mahasiswa_id='$id'");
				$row=$tampil->fetch_assoc();
				?>
<div class="form-group">
					<label for="nim"><b>NIM :</b></label>
					<input type="hidden" name="mahasiswa_id" value="<?php echo $row['mahasiswa_id']?>" class="form-control">
					<input type="number" name="nim" value="<?php echo $row['nim']?>" class="form-control">
					
				</div>

				<div class="form-group">
					<br>
					<label for="nama"><b>Nama   :</b></label>
					<input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
					<br>
				</div>

				<div class="form-group">
					<br>
					<label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
					<br>
					<select name="jenis_kelamin" class="form-control">
						<option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
						<option value="laki-laki">Laki-Laki</option>
						<option value="perempuan">Perempuan</option>
						<br>
				</select>
			</div>

			<div class="form-group">
				<br>
				<label for="Alamat"><b>Alamat :</b></label>
				<br>
				<textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
				<br>
			</div>

			<br>
			<input type="submit" name="kirim" value="Ubah" class="btn btn-info" >
			<input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
			</div>
		</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
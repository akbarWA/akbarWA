<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DATA INPUT MAHASISWA</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
					<form action="proses-input-mahasiswa.php"  method="POST">
				<div class="form-group">
				<label for="nim">NIM</label>
					<input type="number"  id="nim" name="nim" placeholder="Isikan NIM" class="form-control">
				</div>
				
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" name="nama" placeholder="Isikan Nama Lengkap" class="form-control">
				</div>
				
                    <div class="form-group">
						<br>
                        <label for="jenis_kelamin">jenis kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    <br>
				<div class="form-group">
				<label for="alamat">Alamat</label>
					<textarea name="alamat"class="form-control" placeholder="Isikan Alamat Lengkap"></textarea>
				</div>
				
					<input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
					<input type="reset" name="kosongkan" value="kosongkan" class="btn btn-danger">
				
				</form>
			</div>
		</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
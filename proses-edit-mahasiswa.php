
<?php

$id=$_GET['mahasiswa_id'];
$nim=$_GET['nim'];
$nama=$_GET['nama'];
$jenis_kelamin=$_GET['jenis_kelamin'];
$alamat=$_GET['alamat'];


include "koneksi1.php";

$ubah=$koneksi->query("update mahasiswa set nim='$nim',nama='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where mahasiswa_id='$id'");

if($ubah==true){

	header("location:tampil-mahasiswa.php?pesan=editberhasil");
} else{
	echo "Error";
}

?>
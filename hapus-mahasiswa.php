<?php
    $id=$_GET['id'];
    
    include "koneksi1.php";

    $hapus=$koneksi->query("delete from mahasiswa where mahasiswa_id='$id'");

    if($hapus==true){

        header("location:tampil-mahasiswa.php?pesan=hapusBerhasil");
    } else{
        echo "Error";
    }
?>
<?php
include("koneksi.php");

$id = $_GET['id_siswa'];

$sql = "DELETE FROM tb_jurusan WHERE id_jurusan='$id'"; 
 $query = mysqli_query($koneksi, $sql);

 $sql = "DELETE FROM tb_spp WHERE id_spp='$id'"; 
 $query = mysqli_query($koneksi, $sql);

 $sql = "DELETE FROM tb_siswa WHERE id_siswa='$id'"; 
 $query = mysqli_query($koneksi, $sql);

 if($query){
    header('location:join_tabel.php?status=sukses');
 }else{
    die ("akses dilarang");
 }
 ?>

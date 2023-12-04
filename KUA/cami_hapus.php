<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from calon_suami where id_cami='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:cami.php");
 
?>
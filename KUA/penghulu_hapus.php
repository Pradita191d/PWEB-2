<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from penghulu where id_peng='$id'");
 
// mengalihkan halaman kembali ke penghulu.php
header("location:penghulu.php");
 
?>
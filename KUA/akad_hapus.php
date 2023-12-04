<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from akad where id_akad='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:akad.php");
 
?>
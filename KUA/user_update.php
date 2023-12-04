<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// update data ke database
mysqli_query($koneksi,"UPDATE users SET nama='$nama', username='$username', password='$password', level='$level' WHERE id='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:user.php");
 
?>
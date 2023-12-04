<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into users VALUES(NULL,'$nama','$username','$password','$level')");
 
// mengalihkan halaman kembali ke matkul.php
header("location:user.php");
 
?>
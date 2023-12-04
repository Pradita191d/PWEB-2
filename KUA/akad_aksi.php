<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_cami = $_POST['nama_cami'];
$nama_cais = $_POST['nama_cais'];
$wali = $_POST['wali'];
$penghulu = $_POST['penghulu'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
 
// update data ke database
mysqli_query($koneksi,"INSERT into akad VALUES(NULL,'$nama_cami','$nama_cais','$wali','$id_peng','$tempat','$tanggal','$waktu')");
 
// mengalihkan halaman kembali ke matkul.php
header("location:akad.php");
 
?>
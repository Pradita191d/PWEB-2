<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_peng = $_POST['nama_peng'];
$nip = $_POST['nip'];
$alamat_peng = $_POST['alamat_peng'];
$no_hp = $_POST['no_hp'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into penghulu VALUES(NULL,'$nama_peng','$nip','$alamat_peng','$no_hp')");
 
// mengalihkan halaman kembali ke matkul.php
header("location:penghulu.php");
 
?>
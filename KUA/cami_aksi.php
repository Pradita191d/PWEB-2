<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_cami = $_POST['nama_cami'];
$no_ktp = $_POST['no_ktp'];
$tpt_lahir = $_POST['tpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$status_cami = $_POST['status_cami'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into calon_suami VALUES(NULL,'$nama_cami','$no_ktp','$tpt_lahir','$tgl_lahir','$alamat','$pekerjaan','$status_cami')");
 
// mengalihkan halaman kembali ke matkul.php
header("location:cami.php");
 
?>
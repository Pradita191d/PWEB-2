<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama_cais = $_POST['nama_cais'];
$wali = $_POST['wali'];
$noktp_cais = $_POST['noktp_cais'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat_cais = $_POST['alamat_cais'];
$pekerjaan_cais = $_POST['pekerjaan_cais'];
$status_cais = $_POST['status_cais'];

// menginput data ke database
mysqli_query($koneksi,"INSERT into calon_istri VALUES(NULL,'$nama_cais', '$wali','$noktp_cais','$tempat_lahir','$tanggal_lahir','$alamat_cais','$pekerjaan_cais','$status_cais')");
 
// mengalihkan halaman kembali ke matkul.php
header("location:cais.php");
 
?>
<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_cais = $_POST['nama_cais'];
$wali = $_POST['wali'];
$noktp_cais = $_POST['noktp_cais'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat_cais = $_POST['alamat_cais'];
$pekerjaan_cais = $_POST['pekerjaan_cais'];
$status_cais = $_POST['status_cais'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE calon_istri SET nama_cais='$nama_cais', wali='$wali', noktp_cais='$noktp_cais', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat_cais='$alamat_cais', pekerjaan_cais='$pekerjaan_cais', status_cais='$status_cais'  WHERE id_cais='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:cais.php");
 
?>
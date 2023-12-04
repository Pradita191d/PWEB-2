<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_cami = $_POST['nama_cami'];
$no_ktp = $_POST['no_ktp'];
$tpt_lahir = $_POST['tpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$status_cami = $_POST['status_cami'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE calon_suami SET nama_cami='$nama_cami', no_ktp='$no_ktp', tpt_lahir='$tpt_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', pekerjaan='$pekerjaan', status_cami='$status_cami'  WHERE id_cami='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:cais.php");
 
?>
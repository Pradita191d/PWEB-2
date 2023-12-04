<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama_peng = $_POST['nama_peng'];
$nip = $_POST['nip'];
$alamat_peng = $_POST['alamat_peng'];
$no_hp = $_POST['no_hp'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE penghulu SET nama_peng='$nama_peng', nip='$nip', alamat_peng='$alamat_peng', no_hp='$no_hp' WHERE id_peng='$id'");
 
// mengalihkan halaman kembali ke matkul.php
header("location:penghulu.php");
 
?>
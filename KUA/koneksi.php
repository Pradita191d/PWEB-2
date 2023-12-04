<?php
//Membuat koneksi ke database MySQL
$koneksi = mysqli_connect("localhost","root","","layanan_nikah");
 
// Mengecek apakah koneksi berhasil atau gagal
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
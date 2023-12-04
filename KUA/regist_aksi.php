<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

// menginput data ke database
$query = mysqli_query($koneksi,"INSERT into users VALUES(NULL,'$nama','$username','$password', '$level')");

if ($query) {
    // Data berhasil disimpan, tampilkan alert
    echo "<script>alert('Akun berhasil dibuat. Silakan login!');window.location='login.php';</script>";
} else {
    // Data gagal disimpan, tampilkan pesan error jika diperlukan
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}
?>

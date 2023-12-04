<?php
// koneksi db
include 'koneksi.php';

// Proses formulir saat tombol submit ditekan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir suami
    $nama_cami = $_POST['nama_cami'];
    $no_ktp = $_POST['no_ktp'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $pekerjaan = $_POST['pekerjaan'];
    $status_cami = $_POST['status_cami'];

    // Ambil data dari formulir istri
    $nama_cais = $_POST['nama_cais'];
    $wali = $_POST['wali'];
    $noktp_cais = $_POST['noktp_cais'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat_cais = $_POST['alamat_cais'];
    $pekerjaan_cais = $_POST['pekerjaan_cais'];
    $status_cais = $_POST['status_cais'];

    // Ambil data dari formulir akad
    $penghulu = $_POST['penghulu'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    // Simpan data suami ke dalam tabel suami
    $result_cami = mysqli_query($koneksi, "INSERT INTO calon_suami VALUES(NULL, '$nama_cami', '$no_ktp', '$tpt_lahir', '$tgl_lahir', '$alamat', '$pekerjaan', '$status_cami')");

    // Simpan data istri ke dalam tabel istri
    $result_cais = mysqli_query($koneksi, "INSERT INTO calon_istri VALUES(NULL, '$nama_cais', '$wali', '$noktp_cais', '$tempat_lahir', '$tanggal_lahir', '$alamat_cais', '$pekerjaan_cais', '$status_cais')");

    // Simpan data akad ke dalam tabel akad
    $result_akad = mysqli_query($koneksi, "INSERT INTO akad VALUES (NULL, '$nama_cami', '$nama_cais', '$wali', '$penghulu', '$tempat', '$tanggal', '$waktu')");

    // Cek apakah data berhasil disimpan
    if ($result_cami && $result_cais && $result_akad) {
        // Pesan berhasil dengan alert
        echo "<script>
                alert('Pendaftaran berhasil. Segera datang ke KUA Cilacap Tengah untuk pengumpulan berkas!');
                window.location.href = 'dokumen.php';
              </script>";
    } else {
        // Pesan kesalahan dengan alert
        echo "<script>
                alert('Terjadi kesalahan dalam proses pendaftaran.');
                window.location.href = 'daftar.php';
              </script>";
    }
}
?>

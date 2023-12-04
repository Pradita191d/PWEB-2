<?php
include 'header.php'; // Menyertakan file header.php untuk menampilkan bagian header.
include 'sidebar.php'; // Menyertakan file sidebar.php untuk menampilkan bagian sidebar.
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Calon Suami</h1>
    </div>
    <div class="table-responsive small">
    </div>

    <body>
        <a class="btn btn-primary" href="penghulu.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            th,
            td {
                padding: 8px;
            }
        </style>
        <?php
        include 'koneksi.php'; // Sertakan file koneksi.php untuk melakukan koneksi ke database.
        $id = $_GET['id']; // Mengambil nilai ID dari URL menggunakan metode GET.
        $data = mysqli_query($koneksi, "select * from penghulu where id_peng='$id'"); // Query untuk mengambil data mata kuliah berdasarkan ID.
        while ($d = mysqli_fetch_array($data)) { // Looping untuk menampilkan data mata kuliah yang akan diedit.
        ?>
            <form method="post" action="penghulu_update.php"> <!-- Form untuk mengirimkan data yang akan diupdate ke halaman update.php. -->
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id_peng']; ?>"> <!-- Input hidden untuk menyimpan nilai ID mata kuliah yang akan diupdate. -->
                            <input type="text" name="nama_peng" value="<?php echo $d['nama_peng']; ?>"> <!-- Input untuk mengedit kode mata kuliah. -->
                        </td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td><input type="text" name="nip" value="<?php echo $d['nip']; ?>"></td> <!-- Input untuk mengedit nama mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat_peng" value="<?php echo $d['alamat_peng']; ?>"></td> <!-- Input untuk mengedit semester mata kuliah. -->
                    </tr>
                    <tr>
                        <td>No Handphone</td>
                        <td><input type="text" name="nohp" value="<?php echo $d['no_hp']; ?>"></td> <!-- Input untuk mengedit jumlah SKS mata kuliah. -->
                    </tr>
                    <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" class="btn btn-success"></td> <!-- Tombol submit untuk menyimpan data mata kuliah -->
                </tr>
            </table>
        </form>
            <?php
            }
            ?>

    </body>

    </html>
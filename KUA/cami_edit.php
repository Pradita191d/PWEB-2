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
        <a class="btn btn-primary" href="cami.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            th,
            td {
                padding: 8px;
            }
        </style>
        <?php
        include 'koneksi.php'; // Sertakan file koneksi.php untuk melakukan koneksi ke database.
        $id = $_GET['id']; // Mengambil nilai ID dari URL menggunakan metode GET.
        $data = mysqli_query($koneksi, "select * from calon_suami where id_cami='$id'"); // Query untuk mengambil data mata kuliah berdasarkan ID.
        while ($d = mysqli_fetch_array($data)) { // Looping untuk menampilkan data mata kuliah yang akan diedit.
        ?>
            <form method="post" action="cami_update.php"> <!-- Form untuk mengirimkan data yang akan diupdate ke halaman update.php. -->
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id_cami']; ?>"> <!-- Input hidden untuk menyimpan nilai ID mata kuliah yang akan diupdate. -->
                            <input type="text" name="nama_cami" value="<?php echo $d['nama_cami']; ?>"> <!-- Input untuk mengedit kode mata kuliah. -->
                        </td>
                    </tr>
                    <tr>
                        <td>No KTP</td>
                        <td><input type="text" name="no_ktp" value="<?php echo $d['no_ktp']; ?>"></td> <!-- Input untuk mengedit nama mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Tempat lahir</td>
                        <td><input type="text" name="tpt_lahir" value="<?php echo $d['tpt_lahir']; ?>"></td> <!-- Input untuk mengedit semester mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td><input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"></td> <!-- Input untuk mengedit jumlah SKS mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Alamat</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                    </tr>
                    <tr>
                        <td>Pekerjaan</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                        <td><input type="text" name="pekerjaan" value="<?php echo $d['pekerjaan']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                    </tr>
                    <tr>
                    <td>Status</td> <!-- Label input untuk status -->
                    <td>
                        <select name="status_cami" value="<?php echo $d['status_cami']; ?>"><!-- Dropdown untuk memilih status -->
                            <option value="sudah_pernah_menikah">Sudah Pernah Menikah</option>
                            <option value="belum_pernah_menikah">Belum Pernah Menikah</option>
                        </select>
                    </td>
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
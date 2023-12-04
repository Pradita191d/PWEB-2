<?php
include 'header.php'; // Menyertakan file header.php untuk menampilkan bagian header.
include 'sidebar.php'; // Menyertakan file sidebar.php untuk menampilkan bagian sidebar.
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Calon Istri</h1>
    </div>
    <div class="table-responsive small">
    </div>

    <body>
        <a class="btn btn-primary" href="cais.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            th,
            td {
                padding: 8px;
            }
        </style>
        <?php
        include 'koneksi.php'; // Sertakan file koneksi.php untuk melakukan koneksi ke database.
        $id = $_GET['id']; // Mengambil nilai ID dari URL menggunakan metode GET.
        $data = mysqli_query($koneksi, "select * from calon_istri where id_cais='$id'"); // Query untuk mengambil data mata kuliah berdasarkan ID.
        while ($d = mysqli_fetch_array($data)) { // Looping untuk menampilkan data mata kuliah yang akan diedit.
        ?>
            <form method="post" action="cais_update.php"> <!-- Form untuk mengirimkan data yang akan diupdate ke halaman update.php. -->
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id_cais']; ?>"> <!-- Input hidden untuk menyimpan nilai ID mata kuliah yang akan diupdate. -->
                            <input type="text" name="nama_cais" value="<?php echo $d['nama_cais']; ?>"> <!-- Input untuk mengedit kode mata kuliah. -->
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Wali</td>
                        <td><input type="text" name="wali" value="<?php echo $d['wali']; ?>"></td> <!-- Input untuk mengedit nama mata kuliah. -->
                    </tr>
                    <tr>
                        <td>No KTP</td>
                        <td><input type="text" name="noktp_cais" value="<?php echo $d['noktp_cais']; ?>"></td> <!-- Input untuk mengedit nama mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Tempat lahir</td>
                        <td><input type="text" name="tempat_lahir" value="<?php echo $d['tempat_lahir']; ?>"></td> <!-- Input untuk mengedit semester mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Tanggal lahir</td>
                        <td><input type="date" name="tanggal_lahir" value="<?php echo $d['tanggal_lahir']; ?>"></td> <!-- Input untuk mengedit jumlah SKS mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Alamat</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                        <td><input type="text" name="alamat_cais" value="<?php echo $d['alamat_cais']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                    </tr>
                    <tr>
                        <td>Pekerjaan</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                        <td><input type="text" name="pekerjaan_cais" value="<?php echo $d['pekerjaan_cais']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                    </tr>
                    <tr>
                    <td>Status</td> <!-- Label input untuk status -->
                    <td>
                        <select name="status_cais" value="<?php echo $d['status_cais']; ?>"><!-- Dropdown untuk memilih status -->
                            <option value="Sudah pernah menikah">Sudah pernah menikah</option>
                            <option value="Belum pernah menikah">Belum pernah menikah</option>
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
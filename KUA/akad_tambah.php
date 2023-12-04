<?php
// Include file header.php dan sidebar.php
include 'header.php'; // Memasukkan konten dari file header.php ke dalam halaman ini
include 'sidebar.php'; // Memasukkan konten dari file sidebar.php ke dalam halaman ini

function getPenghulu()
{
    global $koneksi;
    $query = mysqli_query($koneksi, "SELECT * FROM penghulu");
    $penghulu = array();

    while ($row = mysqli_fetch_assoc($query)) {
        $penghulu[$row['id_peng']] = $row['nama_peng'];
    }
    return $penghulu;
}
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Akad</h1> <!-- Judul halaman -->
    </div>
        <a class="btn btn-primary" href="akad.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            table {
                border-collapse: collapse;
            }

            th,
            td {
                
                padding: 8px;
            }
        </style>
        <form method="post" action="akad_aksi.php" enctype="multipart/form-data"> <!-- Form untuk menambahkan data mata kuliah dengan mengirimkan data ke halaman tambahmatkul_aksi.php -->
            <table>
                <tr>
                    <td>Calon Suami</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="nama_cami"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Calon Istri</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="nama_cais"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Wali</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="wali"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Penghulu</td> <!-- Label input untuk nama mata kuliah -->
                    <select name="penghulu">
                    <?php
                        $penghulu = getPenghulu();
                        foreach ($penghulu as $id_peng => $nama_peng) {
                        echo "<option value=\"$id_peng\">$nama_peng</option>";
                        }
                    ?>
                    </select>
                </tr>
                <tr>
                    <td>Tempat Akad</td> <!-- Label input untuk semester mata kuliah -->
                    <td><input type="text" name="tempat"></td> <!-- Input field untuk memasukkan semester mata kuliah -->
                </tr>
                <tr>
                    <td>Tanggal Akad</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="date" name="tanggal"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td>Waktu Akad</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="text" name="waktu"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan" class="btn btn-success"></td> <!-- Tombol submit untuk menyimpan data mata kuliah -->
                </tr>
            </table>
        </form>
           
            
            
</main>
</body>

</html>
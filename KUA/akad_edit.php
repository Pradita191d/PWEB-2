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
        <h1 class="h2">Edit Data Akad</h1> <!-- Judul halaman -->
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
        <form method="post" action="akad_update.php"> <!-- Form untuk menambahkan data mata kuliah dengan mengirimkan data ke halaman tambahmatkul_aksi.php -->
            <table>
                <tr>
                    <td>Calon Suami</td> <!-- Label input untuk kode mata kuliah -->
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id_akad']; ?>">
                        <input type="text" name="nama_cami" value="<?php echo $d['nama_cami']; ?>">
                    </td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Calon Istri</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="nama_cais" value="<?php echo $d['nama_cais']; ?>"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Wali</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="wali" value="<?php echo $d['wali']; ?>"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Penghulu</td> <!-- Label input untuk nama mata kuliah -->
                    <select name="penghulu">
                    <?php
                        // Mengambil data penghulu yang tersedia dari tabel penghulu
                        $penghulu_data = mysqli_query($koneksi, "SELECT * FROM penghulu");
                        while ($penghulu = mysqli_fetch_array($penghulu_data)) {
                            // Memeriksa apakah opsi harus dipilih sebelumnya berdasarkan nilai 'prodi_id'
                            $selected = ($penghulu['id_peng'] == $d['id_peng']) ? 'selected' : '';
                            echo '<option value="' . $penghulu['id_peng'] . '" ' . $selected . '>' . $penghulu['nama_peng'] . '</option>';
                        }
                    ?>
                    </select>
                </tr>
                <tr>
                    <td>Tempat Akad</td> <!-- Label input untuk semester mata kuliah -->
                    <td><input type="text" name="tempat" value="<?php echo $d['tempat']; ?>"></td> <!-- Input field untuk memasukkan semester mata kuliah -->
                </tr>
                <tr>
                    <td>Tanggal Akad</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td>Waktu Akad</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="text" name="waktu" value="<?php echo $d['waktu']; ?>"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
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
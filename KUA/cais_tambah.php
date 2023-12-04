<?php
// Include file header.php dan sidebar.php
include 'header.php'; // Memasukkan konten dari file header.php ke dalam halaman ini
include 'sidebar.php'; // Memasukkan konten dari file sidebar.php ke dalam halaman ini
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Calon Istri</h1> <!-- Judul halaman -->
    </div>
        <a class="btn btn-primary" href="cais.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            table {
                border-collapse: collapse;
            }

            th,
            td {
                
                padding: 8px;
            }
        </style>
        <form method="post" action="cais_aksi.php"> <!-- Form untuk menambahkan data mata kuliah dengan mengirimkan data ke halaman tambahmatkul_aksi.php -->
            <table>
                <tr>
                    <td>Nama</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="nama_cais"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>Nama Wali</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="wali"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                <tr>
                    <td>No KTP</td> <!-- Label input untuk nama mata kuliah -->
                    <td><input type="text" name="noktp_cais"></td> <!-- Input field untuk memasukkan nama mata kuliah -->
                </tr>
                <tr>
                    <td>Tempat lahir</td> <!-- Label input untuk semester mata kuliah -->
                    <td><input type="text" name="tempat_lahir"></td> <!-- Input field untuk memasukkan semester mata kuliah -->
                </tr>
                <tr>
                    <td>Tanggal lahir</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="date" name="tanggal_lahir"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td>Alamat</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="text" name="alamat_cais"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td>Pekerjaan</td> <!-- Label input untuk jumlah SKS mata kuliah -->
                    <td><input type="text" name="pekerjaan_cais"></td> <!-- Input field untuk memasukkan jumlah SKS mata kuliah -->
                </tr>
                <tr>
                    <td>Status</td> <!-- Label input untuk status -->
                    <td>
                        <select name="status_cais"> <!-- Dropdown untuk memilih status -->
                            <option value=""                    >--Pilih Status--</option>
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
           
            
            
</main>
</body>

</html>
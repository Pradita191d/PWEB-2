<?php
// Include file header.php dan sidebar.php
include 'header.php'; // Memasukkan konten dari file header.php ke dalam halaman ini
include 'sidebar.php'; // Memasukkan konten dari file sidebar.php ke dalam halaman ini
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data User</h1> <!-- Judul halaman -->
    </div>
        <a class="btn btn-primary" href="user.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            th,
            td {
                padding: 8px;
            }
        </style>
        <form method="post" action="user_aksi.php"> <!-- Form untuk menambahkan data mata kuliah dengan mengirimkan data ke halaman tambahmatkul_aksi.php -->
            <table>
                <tr>
                    <td>Nama</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="nama"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                
                <tr>
                    <td>Username</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="username"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                
                <tr>
                    <td>Password</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="password" name="password"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
                </tr>
                
                <tr>
                    <td>Level</td> <!-- Label input untuk kode mata kuliah -->
                    <td><input type="text" name="level"></td> <!-- Input field untuk memasukkan kode mata kuliah -->
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
<?php
include 'header.php'; // Menyertakan file header.php untuk menampilkan bagian header.
include 'sidebar.php'; // Menyertakan file sidebar.php untuk menampilkan bagian sidebar.
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data User</h1>
    </div>
    <div class="table-responsive small">
    </div>

    <body>
        <a class="btn btn-primary" href="user.php" class="back-button">Kembali</a><br><br> <!-- Tombol untuk kembali ke halaman matkul.php -->
        <style>
            th,
            td {
                padding: 8px;
            }
        </style>
        <?php
        include 'koneksi.php'; // Sertakan file koneksi.php untuk melakukan koneksi ke database.
        $id = $_GET['id']; // Mengambil nilai ID dari URL menggunakan metode GET.
        $data = mysqli_query($koneksi, "select * from users where id='$id'"); // Query untuk mengambil data mata kuliah berdasarkan ID.
        while ($d = mysqli_fetch_array($data)) { // Looping untuk menampilkan data mata kuliah yang akan diedit.
        ?>
            <form method="post" action="user_update.php"> <!-- Form untuk mengirimkan data yang akan diupdate ke halaman update.php. -->
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>"> <!-- Input hidden untuk menyimpan nilai ID mata kuliah yang akan diupdate. -->
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>"> <!-- Input untuk mengedit kode mata kuliah. -->
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td> <!-- Input untuk mengedit nama mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td> <!-- Input untuk mengedit semester mata kuliah. -->
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td><input type="text" name="level" value="<?php echo $d['level']; ?>"></td> <!-- Input untuk mengedit semester mata kuliah. -->
                    </tr>
                </table>

                <div><input type="submit" value="Simpan" class="btn btn-success"></td></div>
            </form>
            <br><br>
            
            <?php
            }
            ?>

    </body>

    </html>
<?php
include 'koneksi.php';
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
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Poppins Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SILAPER-DAFTAR</title>
     <!-- icon -->
    <link href="assets/img/kua.png" rel="icon" />
    <link href="assets/img/kua.png" rel="apple-touch-icon" />

    <style>
        body {
            font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 70%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Tambahkan style untuk logo KUA */
        .kua-logo {
            text-align: center;
        }

        .kua-logo img {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <div class="kua-logo">
        <!-- Tambahkan gambar logo KUA di sini -->
        <img src="assets/img/kua.png" alt="KUA Logo">
    </div>
    <h2>Formulir Pendaftaran Nikah</h2>
    <form method="post" action="daftar_aksi.php">
        <!-- Formulir Identitas Suami -->
        <h3>Identitas Suami</h3>
        <label for="nama_cami">Nama</label>
        <input type="text" name="nama_cami" required>

        <label for="no_ktp">No KTP</label>
        <input type="text" name="no_ktp" required>

        <label for="tpt_lahir">Tempat lahir</label>
        <input type="text" name="tpt_lahir" required>

        <label for="tgl_lahir">Tanggal lahir</label>
        <input type="date" name="tgl_lahir" required>

        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" required>

        <label for="pekerjaan">Pekerjaan</label>
        <input type="text" name="pekerjaan" required>

        <label for="status">Status</label>
        <select name="status_cami">
            <option value="                    ">--Pilih Status--</option>
            <option value="Sudah pernah menikah">Sudah pernah menikah</option>
            <option value="Belum pernah menikah">Belum pernah menikah</option>
        </select>

        <!-- Formulir Identitas Istri -->
        <h3>Identitas Istri</h3>
        <label for="nama_cais">Nama</label>
        <input type="text" name="nama_cais" required>

        <label for="noktp_cais">No KTP</label>
        <input type="text" name="noktp_cais" required>

        <label for="tempat_lahir">Tempat lahir</label>
        <input type="text" name="tempat_lahir" required>

        <label for="tanggal_lahir">Tanggal lahir</label>
        <input type="date" name="tanggal_lahir" required>

        <label for="alamat_cais">Alamat</label>
        <input type="text" name="alamat_cais" required>

        <label for="pekerjaan_cais">Pekerjaan</label>
        <input type="text" name="pekerjaan_cais" required>

        <label for="status">Status</label>
        <select name="status_cais">
            <option value="                    ">--Pilih Status--</option>
            <option value="Sudah pernah menikah">Sudah pernah menikah</option>
            <option value="Belum pernah menikah">Belum pernah menikah</option>
        </select>
        <!-- Formulir Akad Nikah -->
        <h3>Akad Nikah</h3>
        <label for="wali">Nama Wali</label>
        <input type="text" name="wali" required>

        <label for="nama_peng">Nama Penghulu</label>
        <select name="penghulu">
            <option value="                    ">--Pilih Penghulu--</option>
            <?php
            $penghulu = getPenghulu();
            foreach ($penghulu as $id_peng => $nama_peng) {
                echo "<option value=\"$id_peng\">$nama_peng</option>";
            }
            ?>
        </select>

        <label for="tempat">Tempat Pelaksanaan</label>
        <input type="text" name="tempat" required>

        <label for="tanggal">Tanggal Pelaksanaan</label>
        <input type="date" name="tanggal" required>

        <label for="waktu">Waktu Pelaksanaan</label>
        <input type="time" name="waktu" required>

        <br>
        <input type="submit" value="Simpan" class="btn btn-success">
    </form>
</body>
</html>

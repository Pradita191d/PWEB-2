<h4>Tambah Data Mahasiswa</h4>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<form action="proses_dosen.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIP</td>
            <td><input type="text" name="nip"></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary" type="submit" value="Simpan"></td>
        </tr>
    </table>
</form>
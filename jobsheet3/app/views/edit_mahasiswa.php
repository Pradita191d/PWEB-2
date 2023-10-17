<?php
include '../classes/database.php';
$db = new database();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3" >
<h4>Edit Data Mahasiswa</h4>
<form action="proses_mahasiswa.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){
?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['id']?>">
                <input type="text" name="nim" value="<?php echo $d['nim']?>">
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input class="btn btn-primary btn-sm" type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>
</div>
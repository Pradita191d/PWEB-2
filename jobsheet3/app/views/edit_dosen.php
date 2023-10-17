<?php
include '../classes/database.php';
$db = new database();
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3" >
<h4>Edit Data Dosen</h4>
<form action="proses_dosen.php?aksi=update" method="post">
<?php
foreach($db->edit_dos($_GET['id']) as $i){
?>
    <table>
        <tr>
            <td>NIP</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $i['id']?>">
                <input type="text" name="nip" value="<?php echo $i['nip']?>">
            </td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $i['nama']?>"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"><?php echo $i['alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input  class="btn btn-primary btn-sm" type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>
</div>
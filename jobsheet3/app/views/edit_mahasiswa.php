<?php
include '../classes/database.php';
$db = new database();
?>

<h3>Edit Data Mahasiswa</h3>
<form action="update.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $x){
?>
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim"></td>
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
            <td><input type="submit" value="Simpan"></td>
        </tr>
    </table>
<?php
}
?>
</form>
<?php
//untuk memanggil class database
include '../classes/database.php';
//untuk instansiasi class database
$db = new database();
?>

<h3>Data Mahasiswa</h3>
<link href="../public/assets/css/sb-admin-2.min.css" rel="stylesheet" />
<a class="btn btn-success mb-4" href="input_mahasiswa.php">Tambah Mahasiswa </br></br></a>
<table border="1">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
foreach($db->tampil_mahasiswa() as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['nim']?></td>
    <td><?php echo $x['nama']?></td>
    <td><?php echo $x['alamat']?></td>
    <td>
        <a class="btn btn-warning mb-4"href="edit_mahasiswa.php?id=<?php echo $x['id'];?>&aksi=edit">Edit</a>
        <a class="btn btn-danger mb-4"href="proses_mahasiswa.php?id=<?php echo $x['id'];?>&aksi=hapus">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
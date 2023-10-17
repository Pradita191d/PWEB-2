<?php
//untuk memanggil class database
include '../classes/database.php';
//untuk instansiasi class database
$db = new database();
?>

<h4>Data Dosen</h4>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="mb-3">
    <a class="btn btn-success btn-sm md-4" href="input_mahasiswa.php">Tambah Dosen</a>
</div>
<table border="1" class="table table-bordered">
<tr>
    <th>No</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
foreach($db->tampil_dosen() as $p){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $p['nip']?></td>
    <td><?php echo $p['nama']?></td>
    <td><?php echo $p['alamat']?></td>
    <td>
        <a class="btn btn-warning btn-sm"href="edit_dosen.php?id=<?php echo $p['id'];?>&aksi=edit">Edit</a>
        <a class="btn btn-danger btn-sm"href="proses_dosen.php?id=<?php echo $p['id'];?>&aksi=hapus">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
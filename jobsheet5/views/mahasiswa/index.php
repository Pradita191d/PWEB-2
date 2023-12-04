<?php
//untuk memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//untuk instansiasi class database
$database = new database();
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<h4>Data Mahasiswa</h4>
<div class="mb-3">
    <a class="btn btn-primary btn-sm md-4" href="tambah_mhs">Tambah Mahasiswa</a>
</div>

<?php
if(isset($_GET['success'])){
if ($_GET['success'] === "tambah"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data mahasiswa berhasil ditambahkan!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif ($_GET['success'] === "update"){
  echo '<div class="alert alert-success  alert-dismissible fade show" role="alert">
  Data mahasiswa berhasil diubah!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
elseif($_GET['success'] === "hapus"){
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  Data mahasiswa berhasil dihapus!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}}
?>

<table border="1" class="table table-bordered">
<tr>
    <th>No</th>
    <th>NIM</th>
    <th>Nama</th>
    <th>Tempat Lahir</th>
    <!-- <th>Tanggal LahirLahir</th> -->
    <th>Jenis Kelamin</th>
    <th>Agama</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>
<?php
$no = 1;
foreach($mahasiswa as $x){
?>
<tr>
    <td><?php echo $no++?></td>
    <td><?php echo $x['nim']?></td>
    <td><?php echo $x['nama']?></td>
    <td><?php echo $x['tempat_lahir']?></td>
    <td><?php echo $x['jenis_kelamin']?></td>
    <td><?php echo $x['agama']?></td>
    <td><?php echo $x['alamat']?></td>
    <td>
        <a class="btn btn-warning btn-sm"href="edit_mhs?id=<?php echo $x['id'];?>">Edit</a>
        <a class="btn btn-danger btn-sm"href="hapusmhs?id=<?php echo $x['id'];?>"onclick="return confirm('Apakah yakin akan menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
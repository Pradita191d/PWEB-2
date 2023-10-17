<?php
//untuk memanggil class database
include '../classes/database.php';
//untuk instansiasi class database
$db = new database();
?>
<div class="px-3 py-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dosen</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<h4>Data Mahasiswa</h4>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="mb-3">
    <a class="btn btn-primary btn-sm md-4" href="input_mahasiswa.php">Tambah Mahasiswa</a>
</div>
<table border="1" class="table table-bordered">
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
        <a class="btn btn-warning btn-sm"href="edit_mahasiswa.php?id=<?php echo $x['id'];?>&aksi=edit">Edit</a>
        <a class="btn btn-danger btn-sm"href="proses_mahasiswa.php?id=<?php echo $x['id'];?>&aksi=hapus">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
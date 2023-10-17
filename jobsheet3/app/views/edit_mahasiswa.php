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
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="hidden" class="form-control col-6" name="id" value="<?php echo $d['id']?>">
    <input type="text" class="form-control col-6" name="nim" value="<?php echo $d['nim']?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text"  class="form-control col-6" name="nama" value="<?php echo $d['nama']?>">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text"  class="form-control col-6" name="alamat" value="<?php echo $d['alamat']?>">
  </div>
  <input  class="btn btn-primary btn-sm" type="submit" value="Simpan">
<?php
}
?>
</form>
</div>
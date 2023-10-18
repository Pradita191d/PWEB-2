<?php
include '../classes/database.php';
$db = new database();
?>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <div class="px-3 py-3" >
    <h4>Edit Data Dosen</h4>
</head>
<form action="proses_dosen.php?aksi=update" method="post">
<?php
foreach($db->edit_dos($_GET['id']) as $i){
?>
  <div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="hidden" class="form-control col-sm-4" name="id" value="<?php echo $i['id']?>">
    <input type="text" class="form-control col-sm-4" name="nip" value="<?php echo $i['nip']?>">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text"  class="form-control col-6" name="nama" value="<?php echo $i['nama']?>">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text"  class="form-control col-6" name="alamat" value="<?php echo $i['alamat']?>">
  </div>
  <input  class="btn btn-primary btn-sm" type="submit" value="Simpan">
<?php
}
?>
</form>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3">
<h4>Tambah Data Mahasiswa</h4>
<form action="proses_mahasiswa.php?aksi=tambah" method="post">
<div class="mb-3">
    <label for="nim" class="form-label">NIM</label>
    <input type="text" class="form-control col-6" name="nim">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text"  class="form-control col-6" name="nama">
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text"  class="form-control col-6" name="alamat">
  </div>
  <input  class="btn btn-primary btn-sm" type="submit" value="Simpan">
</form>
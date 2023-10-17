<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3" >
<h4>Tambah Data Dosen</h4>
<form action="proses_dosen.php?aksi=tambah" method="post">
<div class="mb-3">
    <label for="nip" class="form-label">NIP</label>
    <input type="text" class="form-control col-6" name="nip">
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
</div>
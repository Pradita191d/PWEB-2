<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3">
    <h4>Tambah Data Dosen</h4>
    <form action="prosesdos" method="post">
        <div class=" col-md-5 mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <div class=" col-md-5 mb-3">
            <label for="nip" class="form-label">NIP</label>
            <input type="text" class="form-control col-4" name="nip">
        </div>
        <div class=" col-md-5 mb-3">
            <label for="tempat_lahir" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" name="alamat">
        </div>
        <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
    </form>
</div>

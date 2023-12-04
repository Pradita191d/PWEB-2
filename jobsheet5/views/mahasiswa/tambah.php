<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<div class="px-3 py-3">
    <h4>Tambah Data Mahasiswa</h4>
    <form action="proses_tambah_mhs" method="post">
        <div class=" col-md-5 mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control col-4" name="nim">
        </div>
        <div class=" col-md-5 mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control col-4" name="nama">
        </div>
        <div class=" col-md-5 mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control col-4" name="tempat_lahir">
        </div>
        <!-- <div class=" col-md-5 mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control col-4" name="tgl_lahir">
        </div> -->
        <div class=" col-md-5 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control col-4">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class=" col-md-5 mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select name="agama" class="form-control col-4">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghuchu">Konghuchu</option>
            </select>
        </div>
        <div class=" col-md-5 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control col-6" name="alamat">
        </div>
        <input class="btn btn-primary btn-sm" type="submit" name="submit" value="Simpan">
    </form>
</div>

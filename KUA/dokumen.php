<?php
// Include file header.php dan sidebar.php
include 'header.php';
include 'sidecalon.php';
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Dokumen Syarat Pernikahan</h1>
    </div>
    <div class="table-responsive small">
        <!-- Tombol untuk menambahkan data calon suami baru -->
        <div class="card">
            <div class="card-body">
                <!-- Tabel untuk menampilkan data dokumen syarat pernikahan -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Dokumen</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kartu Tanda Penduduk (KTP)</td>
                            <td>Fotokopi KTP suami dan istri</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Akta Kelahiran</td>
                            <td>Fotokopi akta kelahiran suami dan istri</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kartu Keluarga</td>
                            <td>Fotokopi kartu keluarga suami dan istri</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Data Wali</td>
                            <td>Surat keterangan data wali istri</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Surat Pengantar Nikah</td>
                            <td>Surat dari RT/RW/Kelurahan suami dan istri</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Pas Foto 2x3</td>
                            <td>6 lembar untuk suami dan istri</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Pas Foto 4x6</td>
                            <td>2 lembar untuk suami dan istri</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Surat Cerai</td>
                            <td>Untuk calon pengantin duda/janda cerai</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Akta mati</td>
                            <td>Untuk calon pengantin duda/janda meninggal</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
</main>
</body>
</html>

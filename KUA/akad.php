<?php
// Include file header.php dan sidebar.php
include 'header.php';
include 'sidebar.php';
?>

<!-- Poppins Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">

<!-- DataTables -->
<!-- Include beberapa file CSS untuk tampilan DataTables -->
<link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />

<style>
    body {
      font-family: 'Poppins', 'Courier New', Courier, monospace, sans-serif;
      background-color: #f8f9fa; /* Set a light background color */
    }

    #content-wrapper {
      background-color: #fff;
      margin-top: 70px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    h2 {
      color: #007bff; /* Set a color that contrasts well with the background */
      text-align: center;
      font-size: 2em; /* Adjust the font size as needed */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Add a subtle text shadow */
    }
  </style>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Akad</h1>
    </div>
    <div class="table-responsive small">
        <!-- Tombol untuk menambahkan data calon suami baru -->
        <a class="btn btn-primary mb-4" href="akad_tambah.php">Tambah Akad</a>
        <div class="card">
            <div class="card-body">
                <!-- Tabel untuk menampilkan data mahasiswa -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Calon Suami</th>
                            <th>Calon Istri</th>
                            <th>Wali</th>
                            <th>Penghulu</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Include file koneksi.php untuk melakukan koneksi ke database
                        include 'koneksi.php';

                        // Inisialisasi nomor urut
                        $no = 1;
                        $data = mysqli_query($koneksi, "SELECT akad.*, penghulu.nama_peng FROM akad JOIN penghulu ON akad.id_peng = penghulu.id_peng");
                        
                        while ($d = mysqli_fetch_array($data)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $d['nama_cami']; ?></td>
                                <td><?php echo $d['nama_cais']; ?></td>
                                <td><?php echo $d['wali']; ?></td>
                                <td><?php echo $d['nama_peng']; ?></td> <!-- Ganti dengan nama_peng -->
                                <td><?php echo $d['tempat']; ?></td>
                                <td><?php echo $d['tanggal']; ?></td>
                                <td><?php echo $d['waktu']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="akad_edit.php?id=<?php echo $d['id_akad']; ?>">EDIT</a>
                                    <a class="btn btn-danger" href="akad_hapus.php?id=<?php echo $d['id_akad']; ?>">HAPUS</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- DataTables & Plugins -->
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script>
            $(function() {
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        buttons: ["excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                $("#example2").DataTable({
                    paging: true,
                    lengthChange: false,
                    searching: false,
                    ordering: true,
                    info: true,
                    autoWidth: false,
                    responsive: true,
                });
            });
        </script>
</main>
</body>
</html>


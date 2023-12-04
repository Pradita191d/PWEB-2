<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];

    $mahasiswaController = new DosenController($db);
    $result = $mahasiswaController->createDosen ($nama, $nip, $alamat);

    if ($result) {
        header('location:dosen');
    }
    else {
        header('location:tambah_dos');
    }
}
?>
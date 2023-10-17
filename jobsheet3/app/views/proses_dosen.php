<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dos($_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dosen.php");
}
else if($aksi=="update"){
    $db->update_dos($_POST['id'], $_POST['nip'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_dosen.php");

}
elseif ($aksi=="hapus"){
    $db->hapus_dos($_GET['id']);
    header("location:tampil_dosen.php");
}
?>
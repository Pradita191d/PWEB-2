<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_mahasiswa($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mahasiswa.php");
}
else if($aksi=="update"){
    $db->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mahasiswa.php");

}
?>
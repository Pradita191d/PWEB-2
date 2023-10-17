<?php
class database
{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;
    var $hasil;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_mahasiswa(){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d = mysqli_fetch_array($data)){
            $this->hasil[] = $d;
        }
        return $this->hasil;
    }

    function tambah_mahasiswa($nim, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa (nim, nama, alamat) values ('$nim', '$nama', '$alamat')");

    }

    function edit($id){
        $data = mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $this->hasil[] = $d;
        }
        return $this->hasil;
    }

    function update($id, $nim, $nama, $alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nim= '$nim', nama= '$nama', alamat= '$alamat' where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi, "delete from mahasiswa where id='$id'");
    }

    function tampil_dosen(){
        $data = mysqli_query($this->koneksi, "select * from dosen");
        while($d = mysqli_fetch_array($data)){
            $this->hasil[] = $d;
        }
        return $this->hasil;
    }

    function tambah_dos($nim, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into dosen (nip, nama, alamat) values ('$nim', '$nama', '$alamat')");

    }

    function edit_dos($id){
        $data = mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $this->hasil[] = $d;
        }
        return $this->hasil;
    }

    function update_dos($id, $nip, $nama, $alamat){
        mysqli_query($this->koneksi, "update dosen set nip= '$nip', nama= '$nama', alamat= '$alamat' where id='$id'");
    }

    function hapus_dos($id){
        mysqli_query($this->koneksi, "delete from dosen where id='$id'");
    }

}
?>
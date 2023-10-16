<?php

//membuat class dengan nama class mahasiswa
class mahasiswa{
//menambahkan properti untuk class mahasiswa
    var $nim;
    var $nama;
    var $alamat;

    //membuat method untuk menampilkan nama
    function tampil_nama(){
        return "Namaku Pradita Ruri Ardian <br>";
    }

    //membuat method untuk menampilkan alamat
    function tampil_alamat(){
        return "Alamatku di Jalan Malabar, Cilacap Tengah <br><br>";
    }
}
//membuat object dari kelas mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan object ke layar
echo "CLASS MAHASISWA <br><br>";
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();

//membuat class dosen
class dosen{
    //membuat properti untuk class dosen
    var $nidn;
    var $nama;
    var $prodi;

    //menambahkan method untuk menampilkan nidn
    function tampil_nidn(){

    }

    //menambahkan method untuk menampilkan nama
    function tampil_nama(){
        return "Nama saya adalah Pradita Ruri Ardian <br>";
    }

    //menambahkan method untuk menampilkan prodi
    function tampil_prodi(){
        return "Dari prodi Teknik Informatika <br><br>";
    }
}

//membuat object untuk class dosen
$nama_dosen = new dosen();
//menampilkan object ke layar
echo "CLASS DOSEN <br><br>";
echo $nama_dosen->tampil_nama();
echo $nama_dosen->tampil_prodi();
?>
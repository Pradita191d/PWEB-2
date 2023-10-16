<?php

//membuat class dengan nama class mahasiswa
class mahasiswa{
//menambahkan properti untuk class mahasiswa
    var $nim;
    var $nama;
    var $alamat;

    //membuat construct
    function __construct(){
        echo "Aku Mahasiswa Teknik Informatika <br>";
    }

    //membuat destruct
    function __destruct(){
        echo "Politeknik Negeri Cilacap";
    }

    //membuat method mahasiswa
    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah <br>";
    }

    //membuat method untuk menampilkan nama
    function tampil_nama(){
        return "Namaku Pradita Ruri Ardian <br>";
    }

    //membuat method untuk menampilkan alamat
    function tampil_alamat(){
        return "Alamatku di Jalan Malabar, Cilacap Tengah <br>";
    }
}
//membuat object dari kelas mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan object ke layar
echo $nama_mahasiswa->tampil_nama();
echo $nama_mahasiswa->tampil_alamat();
echo $nama_mahasiswa->tampil_mahasiswa();

?>
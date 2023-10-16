<?php
//membuat class mahasiswa
class mahasiswa{
    //properti untuk class mahasiswa
    public $nama;
    private $nim = "220302092";

    //membuat public method untuk menampilkan nama
    public function tampilkan_nama(){
        //nilai yang dikembalikan
        return "Nama Saya Pradita Ruri Ardian <br>";
    }

    //membuat protected method
    function tampilkan_nim(){
        return "NIM Saya ".$this->nim. "<br>";
    }
}

//instansiasi object ke dalam class mahasiswa
$pradita = new mahasiswa();

//memanggil method tampilkan_nama untuk menampilkan nama pada layar
echo $pradita->tampilkan_nama();
echo $pradita->tampilkan_nim();

?>
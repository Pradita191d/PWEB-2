<?php
//membuat class manusia
class manusia
{
    public $nama_saya;
    //method dengan kembalian
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }
}

//turunan class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    //membuat method
    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$ti = new mahasiswa();

//mengakses method yang sudah dibuat
$ti->panggil_nama("Dita");
$ti->panggil_mahasiswa("Pradita");

//menampilkan di layar
echo "Nama panggilan saya " . $ti->nama_saya. "<br>";
echo "Nama depan saya " . $ti->nama_mahasiswa. "<br>";
?>
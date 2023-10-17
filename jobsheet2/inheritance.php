<?php
//membuat class manusia
class manusia
{
    public $nama_saya;
    //properti protected 
    protected $nohp;
    //properti private
    private $ttl = "17 Juni 2004";

    //method dengan kembalian
    function panggil_nama($saya)
    {
        $this->nama_saya = $saya;
    }

    public function getTTL()
    {
        return $this->ttl;
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

    //method dengan memanggil protected properti
    public function setNohp($nohp)
    {
        $this->nohp = $nohp;
    }

    public function getNohp()
    {
        return $this->nohp;
    }

}

//instansiasi class mahasiswa
$ti = new mahasiswa();

//mengakses method yang sudah dibuat
$ti->panggil_nama("Dita");
$ti->panggil_mahasiswa("Pradita");

//mengakses dan mengatur protected properti
$ti->setNohp("0895358061152");

//mengambil private properti
$ttl = $ti->getTTL();

//menampilkan di layar
echo "Nama panggilan saya " . $ti->nama_saya. "<br>";
echo "Nama depan saya " . $ti->nama_mahasiswa. "<br>";
echo "No HP saya " . $ti->getNohp() . "<br>";
echo "Tanggal lahir saya " . $ttl . "<br>";
?>
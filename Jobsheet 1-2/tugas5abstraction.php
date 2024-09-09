<?php
//membuat class pengguna menggunakan abstract
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); //memanggil konstruktor dari kelas induk
        $this->mataKuliah = $mataKuliah;
    }
    //Metode abstrak aksesFitur Dosen
    public function aksesFitur() {
        return "Nama Dosen: ($this->nama)<br> Mata Kuliah: ($this->mataKuliah)<br>";
    }
}

class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;

    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    //Metode abstrak aksesFitur Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}

$dosen = new Dosen("Prih Diantono Abda'u", "Praktikum Web 2");
$mahasiswa= new Mahasiswa("Devia Kippuw", "230202031", "D3 Teknik Informatika");

echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>
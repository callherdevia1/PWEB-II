<?php
//membuat class pengguna menggunakan abstract
abstract class Pengguna {
    protected $nama;
    //Mengatur Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function setMatakuliah($nama, $mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }
    //Metode abstrak aksesFitur Dosen
    public function aksesFitur() {
        return "Nama Dosen: ($this->nama)<br> Mata Kuliah: ($this->mataKuliah)<br>";
    }
}
//Mengimplementasikan class pengguna
class Mahasiswa extends Pengguna {
    private $nim;
    private $jurusan;
    //Mengatur Nim
    public function setNim($nim) {
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    //Metode abstrak aksesFitur Mahasiswa
    public function aksesFitur() {
        return "Nama Mahasiswa: {$this->nama}<br> NIM: {$this->nim}<br> Jurusan: {$this->jurusan}<br>";
    }
}
//Instansiasi objek class dosen
$dosen = new Dosen();
$dosen->setNama("Prih Diantono Abda'u");
$dosen->setMataKuliah("Praktikum Web 2");
//Instansiasi objek class mahasiswa
$mahasiswa= new Mahasiswa();
$mahasiswa->setNama("Devia Kippuw");
$mahasiswa->setNim("230202031");
$mahasiswa->setJurusan("Komputer Bisnis Informatika");
//Menampilkan Data
echo $dosen->aksesFitur() . "<br>";
echo $mahasiswa->aksesFitur() . "<br>";
?>

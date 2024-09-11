<?php
// Definisi Class
class Mahasiswa {
    // Private Atribut Dalam Class Mahasiswa
    private $nama;
    private $nim;
    private $jurusan;

    //Getter dan setter untuk atribut nama, nim, jurusan
    //Getter Nama
    public function getNama() {
        return $this->nama;
    }
    //Gtter NIM
    public function getNIM() {
        return $this->nim;
    }
    //Getter Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    //Setter Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
    //Setter NIM
    public function setNIM($nim) {
        $this->nim = $nim;
    }
    //Setter Jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }
    //Tampilkan Data
    public function tampilkanData() {
        echo "Nama: ". $this->getNama() . "<br>";
        echo "Nim: ". $this->getNim() . "<br>";
        echo "Jurusan: ". $this->getJurusan() . "<br>";
    }
}
//Instansiasi Objek
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setNama("Devia Herena Kippuw");
$mahasiswa1->setNim("230202031");
$mahasiswa1->setJurusan("Komputer dan Bisnis");
//Menampilkan Data
$mahasiswa1->tampilkanData();
?>

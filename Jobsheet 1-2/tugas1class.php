<?php
// Definisi Class, Membuat Class Mahasiswa
class Mahasiswa {
    //Atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // Constructur
    public function __construct($nama, $nim,$jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Metode atau Function
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi Objek Dari Class Mahasiswa
$mahasiswa1 = new Mahasiswa("Devia Herena Kippuw", "230202031","Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData(); //Menampilkan Data Mahasiswa
?>
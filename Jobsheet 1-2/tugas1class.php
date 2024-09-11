<?php
// Definisi Class, Membuat Class Mahasiswa
class Mahasiswa {
    //Atribut nama, nim, dan jurusan
    public $nama;
    public $nim;
    public $jurusan;

    // Metode atau Function tampil Data
    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
    }
}

// Instansiasi dari kelas mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1 = nama ="Devia Herena Kippuw" . "<br>";
$mahasiswa1 = nim ="230202031" . "<br>";
$mahasiswa1 = jurusan ="Komputer dan Bisnis" . "<br>";
echo $mahasiswa1->tampilkanData(); //Menampilkan Data Mahasiswa
?>

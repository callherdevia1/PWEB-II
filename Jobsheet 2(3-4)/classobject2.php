<?php
//Definisi Class
class Mahasiswa { //Membuat class mahasiswa
    public $nama;//atribut nama
    public $nim; //atribut nim
    public $jurusan; //atribut jurusan

    public function tampilkanData() {
        return "Mahasiswa ini memiliki nama $this->nama, memiliki NIM $this->nim ,dari Jurusan $this->jurusan.";

    }
}
//Instansiasi dari class Mahasiswa
$mahasiswa1 = new Mahasiswa ("Devia Kippuw","230202031","Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>
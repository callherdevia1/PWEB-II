<?php
// Definisi Class
class Pengguna { // membuat class Pengguna
    //membuat atribut nama dan metode getNama()
    protected $nama;

   // Metode getNama
    public function setNama() {
        return $this->nama;
    }
    public function getNama() {
        return $this->nama;          
}
//membuat class Dosen mewarisi dari class Pengguna
class Dosen extends Pengguna { 
    private $mataKuliah;

    // Konstruktor untuk inisialisasi nama dan mataKuliah
    public function setMataKuliah($matakuliah) {
        $this->mataKuliah = $mataKuliah;
    }
    // Metode untuk mengambil mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}
//Instansiasi Objek Dari Class Dosen
$dosen1 = new Dosen();
$dosen1->setNama("Prih Diantono Abda'u");
$dosen1->setMataKuliah("Pemrograman Web 2");

//Menampilkjan Data Dosen
echo "Nama Dosen: " . $dosen1->getNama() . "<br>"; 
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>"; 
?>

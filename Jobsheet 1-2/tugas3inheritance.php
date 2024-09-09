<?php
// Definisi Class
class Pengguna { // membuat class Pengguna
    //membuat atribut nama dan metode getNama()
    protected $nama;

    public function __construct ($nama) {
        $this->nama = $nama;
    }
   // Metode mengambil Nama
    public function getNama() {
        return $this->nama;
    }
}
//membuat class Dosen mewarisi dari class Pengguna
class Dosen extends Pengguna { 
    private $mataKuliah;//Menambahkan atribut MataKuliah

    // Konstruktor untuk inisialisasi nama dan mataKuliah
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
    // Metode untuk mengambil mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}
//Instansiasi Objek Dari Class Dosen
$dosen1 = new Dosen("Prih Diantono Abda'u", "Pemrograman Web 2 PHP");

//Menampilkjan Data Dosen
echo "Nama Dosen: " . $dosen1->getNama() . "<br>"; // Output: Nama Dosen: Prih Diantono Abda'u
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>"; // Output: Mata Kuliah: Pemrograman Web 2 PHP
?>
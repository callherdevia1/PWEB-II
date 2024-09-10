<?php
//Definisi Class
class Dosen { //Membuat class mahasiswa
    public $nama;//atribut nama dosen
    public $nip; //atribut nip dosen
    public $mataKuliah; //atribut mata kuliah dosen

    //Construct inisialisasi atribut dosen
    public function __construct ($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //Metode menampilkan informasi Dosen
    public function tampilkanDosen() { //Menampilkan Data Mahasiswa
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }

}
//Instansiasi Objek dari Class Dosen
$dosen1= new Dosen("Annas Setiawan Prabowo","198711172018031001","Konsep Basis Data");
echo $dosen1->tampilkanDosen()."<br>"; 
?>
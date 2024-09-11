<?php
//Class Dosen
class Dosen { 
    public $nama;//atribut nama dosen
    public $nip; //atribut nip dosen
    public $mataKuliah; //atribut mata kuliah dosen

    //Metode menampilkan informasi Dosen
    public function tampilkanDosen() { //Menampilkan Data Mahasiswa
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }

}
//Instansiasi Objek dari Class Dosen
$dosen1= new Dosen();
$dosen1->nama = "Annas Setiawan Prabowo";
$dosen1->nip = "198711172018031001";
$dosen1->mataKuliah = "Konsep Basis Data";
//Menampilkan Data Dosen Menggunakan tampilkanDosen()
echo $dosen1->tampilkanDosen()."<br>"; 
?>

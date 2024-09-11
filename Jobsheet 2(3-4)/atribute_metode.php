<?php
//Class Mahasiswa
class Mahasiswa { 
    public $nama;//atribut nama
    public $nim; //atribut nim
    public $jurusan; //atribut jurusan

    
    public function tampilkanData() { //Menampilkan Data Mahasiswa
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
    }

    //Mengupdate Jurusan Mahasiswa
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
    }
}
//Instansiasi & Update Jurusan
$mahasiswa1= new Mahasiswa();
$mahasiswa1->nama = "Devia Herena Kippuw";
$mahasiswa1->nim = "230202031";
$mahasiswa1->jurusan = "Komputer dan Bisnis";

//Menampilkan Data Sebelum Update
echo $mahasiswa1->tampilkanData()."<br>"; 

//Update NIM
$mahasiswa1->setNim("230102032");
//Menampilkan Data Sesudah Update
echo $mahasiswa1->tampilkanData();
?>

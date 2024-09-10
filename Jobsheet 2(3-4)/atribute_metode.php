<?php
//Definisi Class
class Mahasiswa { //Membuat class mahasiswa
    public $nama;//atribut nama
    public $nim; //atribut nim
    public $jurusan; //atribut jurusan

    public function __construct ($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() { //Menampilkan Data Mahasiswa
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
    }

    //Membuat Metode Tambahan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Setter untuk mengubah NIM
    public function setNim($nimBaru) {
        $this->nim = $nimBaru;
}
}
//Instansiasi & Update Jurusan
$mahasiswa1= new Mahasiswa("Devia Kippuw","230202031","Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData()."<br>"; 
//Update NIM
$mahasiswa1->setNim ("230102032");
echo $mahasiswa1->tampilkanData();
?>
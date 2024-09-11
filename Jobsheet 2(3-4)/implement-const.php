<?php
//Definisi Class
class Mahasiswa { //Membuat class mahasiswa
    public $nama;//atribut nama
    public $nim; //atribut nim
    public $jurusan; //atribut jurusan
                 
    //Menambahkan construct pada kelas mahasiswa
    public function __construct ($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan.";
    }
}
//Instansiasi & Update Jurusan
$mahasiswa1 = new Mahasiswa ("Devia Kippuw","230202031","Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData();
?>

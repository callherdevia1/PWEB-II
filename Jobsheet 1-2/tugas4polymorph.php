<?php
// Definisi Class Pengguna
class Pengguna {
    // Metode aksesFitur yang digunakan di class turunan
   protected $nama;

   public function getNama() {
    return $this->nama;
   }

   public function setNama($nama) {
        $this->nama = $nama;
   }
    //Metode aksesFitur
   public function aksesFitur() {
    echo " MengaksesFitur Pengguna";
   }
}
class Dosen extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses Fitur Dosen";
    }
}

class Mahasiswa extends Pengguna {
    public function aksesFitur() {
        echo "Mengakses Fitur Mahasiswa";
    }
}
//Instalisasi objek dari Dosen dan Mahasiswa
$dosen1 = new Dosen ();
$dosen1 ->aksesFitur(); //Output dari fitur dosen
echo "<br>";
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur(); //Output dari fitur mahasiswa
?>

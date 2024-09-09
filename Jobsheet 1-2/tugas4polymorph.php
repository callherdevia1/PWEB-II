<?php
// Definisi Class Pengguna
class Pengguna {
    // Metode aksesFitur yang akan dioverride di class turunan
   protected $nama;

   public function getNama() {
    return $this->nama;
   }

   public function setNama($nama) {
        $this->nama = $nama;
   }

   public function aksesFitur() {
    echo "Fitur Pengguna";
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
$dosen1 ->aksesFitur(); //Output Fitur Dosen
echo "<br>";
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->aksesFitur(); //Output dari fitur mahasiswa
?>

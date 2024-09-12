<?php
// Kelas induk Person
class Person {
    protected $name;

    // Metode untuk menampilkan peran, yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Undefined Role";
    }

    public function getName() {
        return $this->name;
    }
    
    public function setName($name) {
        $this->name = $name;
    }
    
}

// Kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {
    private $nidn; // Encapsulasi

    // Setter dan getter untuk NIDN (Encapsulasi)
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
    

    // Polymorphism: metode getRole untuk Dosen
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation

    // Setter dan getter untuk NIM (Encapsulation)
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    // Override metode getRole untuk Mahasiswa (Polymorphism)
    public function getRole() {
        return "Mahasiswa";
    }
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    protected $title;

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getTitle() {
        return $this->title;
    }

    // Metode abstrak di kelas turunan
    abstract public function submitJurnal();
}

// Kelas JurnalDosen sebagai turunan dari Jurnal
class JurnalDosen extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Dosen " . $this->getTitle() . " telah diajukan";
    }
}

// Kelas JurnalMahasiswa sebagai turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Mahasiswa " . $this->getTitle() . " telah diajukan";
    }
}

// Instansiasi objek Dosen
$dosen1 = new Dosen();
$dosen1->setName("Prih Diantono Abda'u");
$dosen1->setNidn("123456789");

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setName("Devia Kippuw");
$mahasiswa1->setNim("230202031");

echo $dosen1->getName() . " adalah " . $dosen1->getRole() . " dengan NIDN " . $dosen1->getNidn() . "<br>";
echo $mahasiswa1->getName() . " adalah " . $mahasiswa1->getRole() . " dengan NIM " . $mahasiswa1->getNim() . "<br>";

// Instansiasi objek Jurnal Dosen
$jurnalDosen = new JurnalDosen();
$jurnalDosen->setTitle("OOP Pemrograman Web");
// Instansiasi objek Jurnal Mahasiswa
$jurnalMahasiswa = new JurnalMahasiswa();
$jurnalMahasiswa->setTitle("ERD JKB-LC");

echo $jurnalDosen->submitJurnal() . "<br>";
echo $jurnalMahasiswa->submitJurnal() . "<br>";
?>

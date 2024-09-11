<?php
// Kelas induk Person
class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Metode untuk menampilkan peran, yang akan dioverride oleh kelas turunan
    public function getRole() {
        return "Undefined Role";
    }

    public function getName() {
        return $this->name;
    }
}

// Kelas Dosen yang merupakan turunan dari Person
class Dosen extends Person {
    private $nidn; // Encapsulation

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Setter dan getter untuk NIDN (Encapsulation)
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole untuk Dosen (Polymorphism)
    public function getRole() {
        return "Dosen";
    }
}

// Kelas Mahasiswa yang merupakan turunan dari Person
class Mahasiswa extends Person {
    private $nim; // Encapsulation

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

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

    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak yang harus diimplementasikan di kelas turunan
    abstract public function submitJurnal();
}

// Kelas JurnalDosen sebagai turunan dari Jurnal
class JurnalDosen extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Dosen: " . $this->title . " Pengajuan Jurnal oleh Dosen";
    }
}

// Kelas JurnalMahasiswa sebagai turunan dari Jurnal
class JurnalMahasiswa extends Jurnal {
    public function submitJurnal() {
        return "Jurnal Mahasiswa: " . $this->title . " Pengajuan Jurnal oleh Mahasiswa";
    }
}

// Instansiasi objek Dosen dan Mahasiswa
$dosen1 = new Dosen("Prih Diantono Abda'u", "123456789");
$mahasiswa1 = new Mahasiswa("Devia Kippuw", "230202031");

echo $dosen1->getName() . " adalah " . $dosen1->getRole() . " dengan NIDN: " . $dosen1->getNidn() . "<br>";
echo $mahasiswa1->getName() . " adalah " . $mahasiswa1->getRole() . " dengan NIM: " . $mahasiswa1->getNim() . "<br>";

// Instansiasi objek Jurnal
$jurnalDosen = new JurnalDosen("Pemrograman Web 1 dan 2");
$jurnalMahasiswa = new JurnalMahasiswa("Komputer dan Bisnis");

echo $jurnalDosen->submitJurnal() . "<br>";
echo $jurnalMahasiswa->submitJurnal() . "<br>";
?>

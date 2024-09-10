<?php
//Menambahkan Atribut(Attribute)dan Metode (Methods)

class Buku { //Membuat class Buku
    //Atribut ; Menyimpan data object
    public $judul;
    public $penulis;

    public function __construct($judul, $penulis) {
        $this->judul =$judul;
        $this->penulis =$penulis;
    }
    //Metode operasi yang dilakukan oleh objek
    public function tampilkanInfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}

$buku1 = new Buku("Pemrograman Web", "John Doe");
echo $buku1->tampilkanInfo();
?>
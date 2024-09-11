<h1>🗒️ KONSEP DASAR OOP</h1>
Mengidentifikasi dan menjelaskan konsep dasar OOP, memahami dan menerapkan prinsip Encapsulation, Inheritance, Polymorphism,
dan Abstraction dalam PHP, mengimplementasikan OOP dalam program PHP sederhana.<br>

## 1. Class dan Object
- <b>Class Buku</b><br>
  ```
  class Buku {
  // Atribut atau Properties
    public $judul;
    public $penulis;
  ```
  Class bernama Buku: Class ini memiliki atribut atau properties judul dan       penulis.
- <b>Construct</b><br>
   ```
   public function __construct($judul, $penulis) {
   $this->judul = $judul;
   $this->penulis = $penulis;
    }
    ```
   Construct berfungsi untuk memanggil fungsi dari object 
   serta metode
 - <b>Metode atau Function</b><br>
    ```
    public function tampilkanInfo() {
    return "Judul: $this->judul, Penulis: $this->penulis";
    }
    ```
    Metode tampilkanInfo() berfungsi untuk menampiklan info dari clas Buku
- <b>Object</b><br>
    ```
    $buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
    echo $buku1->tampilkanInfo();
    ```
    Object: $buku1 adalah instance dari class Buku, dan data buku ditampilkan
    menggunakan metode tampilkanInfo().

## 2. Prinsip OOP
- <b>Encapsulasi</b><br>
  ```
  <?php
  class Buku {
  private $judul;
  private $penulis;
  public function __construct($judul, $penulis) {
  $this->judul = $judul;
  $this->penulis = $penulis;
  }
  public function getJudul() {
  return $this->judul;
  }
  public function setJudul($judul) {
  $this->judul = $judul;
  }
  }
  $buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
  echo $buku1->getJudul(); // Output: Pemrograman PHP
  ?>
  ```
  Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
  akses melalui metode tertentu.
- <b>Inheritance(Pewarisan)</b><br>
  ```
  class Buku extends Produk {
    private $penulis;
    public function __construct($nama, $penulis) {
    parent::__construct($nama);
    $this->penulis = $penulis;
    }
    public function getPenulis() {
    return $this->penulis;
  ```
  Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain. Ciri    khas dari inheritance yaitu ```extends```
- <b>Polymorphism</b><br>
  Metode yang sama dapat memiliki implementasi berbeda
  dalam class yang berbeda.
- <b>Abstraction</b><br>
 Menyembunyikan detail implementasi dan hanya menampilkan
 fungsi penting.

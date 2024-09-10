<h1>JOBSHEET 2</h1>
Menggunakan Konsep Kelas dan Objek dalam PHP
Dalam Jobsheet 2 menerapkan konsep kelas (class) serta objek (object) pada PHP dan menekankan pada pembuatan dan penggunaan kelas serta objek.<br>

## 1. Class dan Object
- <b>Class Mahasiswa</b><br>
  ```bahs
  class Mahasiswa { //Membuat class mahasiswa
    public $nama;//atribut nama
    public $nim; //atribut nim
    public $jurusan; //atribut jurusan
  ```
  Ditahap pertama awal kode membuat class Mahasiswa yang memiliki atribut   seperti nama, nim, dan jurusan. Class merupakan template blueprint yang   digunakan untuk membuat objek-objek mahasiswa yang akan memiliki atribut dan   perilaku tertentu.Atribut bersifat public, artinya bisa diakses dari luar   class.
- <b>Metode tampilkanData</b><br>
  ```bahs
  public function tampilkanData() {
        return "Mahasiswa ini memiliki nama $this->nama, memiliki NIM $this->nim ,dari Jurusan $this->jurusan.";

    }
  }
  ```
  Pada langkah kedua, membuat sebuah metode atau fungsi bernama   tampilkanData() yang akan menampilkan informasi mengenai objek mahasiswa.<br>
    ```tampilkanData()``` digunakan untuk mengembalikan string yang berisi   informasi mengenai mahasiswa yang diinstansiasi.<br>
    
  - <b>OUTPUT CLASS & OBJECT</b><br>
  
  ![Screenshot 2024-09-10 140957](https://github.com/user-attachments/assets/a1386d44-21fd-495c-a3a5-6ebc9d71bde5) <br>
## 2. Implementasi Constructor
```bahs
public function __construct ($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
Constructor didefinisikan dengan nama ```__construct```. Construct sendiri memiliki peran penting dalam memberikan nilai awal pada atribut-atribut kelas ketika objek baru diciptakan.<br>

- <b>OUTPUT IMPLEMENTASI CONSTRUCTOR</b>

![Screenshot 2024-09-10 141732](https://github.com/user-attachments/assets/97161710-b252-4332-8548-84cf13311dbb) <br>
## 3. Metode Tambahan 
```bahs
public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }
}
```
Metode tambahan berfungsi untuk mengubah jurusan dari objek yang sudah dibuat. Metode ```updateJurusan()``` dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.<br>

- <b>OUTPUT METODE TAMBAHAN</b>

![Screenshot 2024-09-10 142204](https://github.com/user-attachments/assets/4c9fcc8d-ed87-4c90-b818-092c162f66b6) <br>
## 4. Atribut dan Metode
```bahs
public function setNim($nimBaru) {
        $this->nim = $nimBaru;
}
```
Metode setter pada atribut nim digunakan untuk mengubah atau memperbarui nilai dari atribut nim setelah objek dibuat. Setter digunakan untuk memanipulasi data tanpa harus mengakses atribut secara langsung.
```
$mahasiswa1->setNim ("230102032");
echo $mahasiswa1->tampilkanData();
```
```tampilkanData()```digunakan untuk menampilkan data mahasiswa yang sudah diperbarui<br>

- <b>OUTPUT ATRIBUT METODE</b>

![Screenshot 2024-09-10 142629](https://github.com/user-attachments/assets/89b28dd1-703f-463f-9b57-919cffbbc635) <br>
## TUGAS
```
<?php
//Definisi Class
class Dosen { //Membuat class mahasiswa
    public $nama;//atribut nama dosen
    public $nip; //atribut nip dosen
    public $mataKuliah; //atribut mata kuliah dosen

    //Construct inisialisasi atribut dosen
    public function __construct ($nama, $nip, $mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //Metode menampilkan informasi Dosen
    public function tampilkanDosen() { //Menampilkan Data Mahasiswa
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }

}
//Instansiasi Objek dari Class Dosen
$dosen1= new Dosen("Annas Setiawan Prabowo","198711172018031001","Konsep Basis Data");
echo $dosen1->tampilkanDosen()."<br>"; 
?>
```
- <b>Implementasi kelas Dosen</b>
```
class Dosen { //Membuat class mahasiswa
    public $nama;//atribut nama dosen
    public $nip; //atribut nip dosen
    public $mataKuliah; //atribut mata kuliah dosen
```
Membuat class Dosen dengan atribut nama, nip, dan juga mataKuliah.<br>
- <b>Menampilkan Informasi Dosen</b>
```
public function tampilkanDosen() { //Menampilkan Data Mahasiswa
        echo "Nama Dosen: " . $this->nama . "<br>";
        echo "NIP: " . $this->nip . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }
```
Membuat metode ```tampilkanDosen()``` untuk menampilkan informasi dosen.<br>
- <b>Objek Dari Kelas Dosen</b>
```
$dosen1= new Dosen("Annas Setiawan Prabowo","198711172018031001","Konsep Basis Data");
echo $dosen1->tampilkanDosen()."<br>";
```
membuat objek ```$dosen1= new Dosen``` untuk merepresentasikan data dan perilaku yang berkaitan dengan dosen di dalam program, serta memanggil metode dengan ```tampilkanDosen()```.

- <b>OUTPUT TUGAS</b><br>

![Screenshot 2024-09-10 143039](https://github.com/user-attachments/assets/ec0f2c36-548f-4cf8-a0b7-74afeb5384ac)

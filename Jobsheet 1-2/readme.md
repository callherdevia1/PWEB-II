<h1>🗒️ JOBSHEET 1</h1>

Repository ini dibuat untuk Tugas Mata Kuliah Pemrograman Web 2 mengenai materi Object-Oriented Programming (OOP).<br>
OOP merupakan pemrograman yang berfokus pada konsep objek, konsep dasar ini seperti class dan object dalam kode program.
## Konsep Dasar OOP
## 1. Class dan Object
- <b>Kelas (Class)</b>
 ```bash 
 class Mahasiswa { 
 ```
 Class merupakan template cetak biru atau Blueprint untuk menciptakan suatu objek. Class mendefinisikan atribut dan metode yang akan dimiliki oleh objek yang dibuat dari class tersebut.
- <b>Objek (Object)</b>
```bash
$mahasiswa1 = new Mahasiswa();
$mahasiswa1 = nama ="Devia Herena Kippuw";
$mahasiswa1 = nim ="230202031" ;
$mahasiswa1 = jurusan ="Komputer dan Bisnis";
```
Object merupakan Instance dari class yang memiliki atribut (properties) dan perilaku
(methods) yang dapat memanipulasi data atau menjalankan fungsi tertentu.
## Atribut dan Metode
## Atribut (Attribute)<br>
```bash
    public $nama;
    private $nim;
    protected $jurusan;
```
- Public adalah atribut yang dapat diakses dari luar class tanpa batasan atau dapat diakses dari mana saja
- Private adalah atribut yang hanya dapat diakses dari dalam class itu sendiri dan tidak bisa dipanggil dari luar class.
- Protected adalah atribut yang dapat diakses oleh class itu sendiri dan dari dalam class turunannya serta tidak dari luar classnya.
## Metode (Methods)
```bash
public function tampilkanData() {
   return "Nama: $this->nama, NIM: $this->nim, Jurusan: $this->jurusan";
}
```
Metode atau methods merupakan fungsi yang didefinisikan dalam class, yang biasanya digunakan untuk melakukan operasi atau perintah pada objek.

- <b>OUTPUT CLASS DAN OBJECT</b> <br>
![Screenshot 2024-09-12 011100](https://github.com/user-attachments/assets/3973d56e-9841-4107-bc05-b19b84146849) <br>

## 2. Enkapsulasi (Encapsulation)<br>
```bash
    private $nama;
    private $nim;
    private $jurusan;
```
Encapsulation digunakan untuk menyembunyikan detail internal dari suatu objek dan hanya memperlihatkan bagian yang diperlukan melalui metode tertentu. Atribut class biasanya disembunyikan dengan akses modifier private atau protected
- Getter and Setter
  ```bash
   //Getter Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    //Setter Nama
    public function setNama($nama) {
        $this->nama = $nama;
    }
  ```
  - Getter digunakan untuk mengambil atau mengakses nilai dari atribut private atau protected.
  - Setter digunakan untuk mengatur atau mengubah nilai dari atribut private atau protected.
  Pada encapsulation akses melalui metode getter dan setter, serta kontrol lebih pada akses dan modifikasi data.

- <b>OUTPUT ENKAPSULASI(ENCAPSULATION)</b><br>
![Screenshot 2024-09-12 011123](https://github.com/user-attachments/assets/1125f9f9-ddf1-41f9-88d5-861d5e647c21) <br>
## 3. Inheritance (Pewarisan)<br>
```bash
class Dosen extends Pengguna { 
    private $mataKuliah;

    // Konstruktor untuk inisialisasi nama dan mataKuliah
    public function setMataKuliah($matakuliah) {
        $this->mataKuliah = $mataKuliah;
    }
    // Metode untuk mengambil mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}
```
Inheritance atau pewarisan sifat merupakan class turunan dari class yang lainnya. inheritance di buat dengan membuat class baru, class yang mewariskan disebut parent class, dan class yang mewarisi disebut child class menggunakan keyword <b>extends</b>
- Membuat class Pengguna dengan atribut nama dan metode getNama().
 ```
   public function getNama() {
        return $this->nama;
    }
 ```
- Instansiasi objek dari class Dosen
```
$dosen1 = new Dosen();
$dosen1->setNama("Prih Diantono Abda'u");
$dosen1->setMataKuliah("Pemrograman Web 2 PHP");
```

- <b>OUTPUT INHERITANCE (PEWARISAN)</b><br>
![Screenshot 2024-09-12 011146](https://github.com/user-attachments/assets/63cceb43-4069-4171-92a4-9140ab116887) <br>
## 4. Polymorphism (Polimorfisme)<br>
```
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
```
Polymorphism adalah kemampuan untuk menggunakan objek dari berbagai class yang memiliki metode yang sama, namun implementasinya berbeda.
- class Pengguna dengan metode aksesFitur().
  ```bash
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
  ```
- Instansiasi objek dari class Dosen dan Mahasiswa
  ```bash
  $dosen1 = new Dosen ();
  $dosen1 ->aksesFitur(); //Output Fitur Dosen
  echo "<br>";
  $mahasiswa1 = new Mahasiswa();
  $mahasiswa1->aksesFitur(); //Output dari fitur mahasiswa
  ```
  - <b>OUTPUT POLYMORPHISM</b><br>
  ![Screenshot 2024-09-12 011205](https://github.com/user-attachments/assets/0c631051-8dd1-4370-87b1-41c3cc3bfeb1)<br>
## 5. Abstraction <br>
Abstraction merupakan konsep di mana hanya menampilkan informasi penting dari sebuah objek dan menyembunyikan detail implementasi yang tidak diperlukan,fokus pada yang dilakukan suatu objek daripada bagaimana cara kerjanya.
```
abstract class Pengguna {
    protected $nama;

    // Setter untuk mengatur nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}
```
 - <b>OUTPUT ABSTRACTION</b><br>
 ![Screenshot 2024-09-12 011225](https://github.com/user-attachments/assets/3d807213-27ad-41c9-8d11-2b6ec6409bf6) <br>

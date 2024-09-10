<h1>JOBSHEET 1</h1>

Repository ini dibuat untuk Tugas Mata Kuliah Pemrograman Web 2 mengenai materi Object-Oriented Programming (OOP).<br>
OOP merupakan pemrograman yang berfokus pada konsep objek, konsep dasar ini seperti class dan object dalam kode program.
## Konsep Dasar OOP
## Class dan Object
- <b>Kelas (Class)</b>
 ```bash 
 class Mahasiswa { 
 ```
 Class merupakan template cetak biru atau Blueprint untuk menciptakan suatu objek. Class mendefinisikan atribut dan metode yang akan dimiliki oleh objek yang dibuat dari class tersebut.
- <b>Objek (Object)</b>
```bash
$mahasiswa1 = new Mahasiswa("Devia Herena Kippuw", "230202031","Komputer dan Bisnis");
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
## Enkapsulasi (Encapsulation)<br>
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
## Inheritance (Pewarisan)<br>
```bash
class Dosen extends Pengguna { 
    private $mataKuliah;//Menambahkan atribut MataKuliah

    // Konstruktor untuk inisialisasi nama dan mataKuliah
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah = $mataKuliah;
    }
```
Inheritance atau pewarisan sifat merupakan class turunan dari class yang lainnya. inheritance di buat dengan membuat class baru, class yang mewariskan disebut parent class, dan class yang mewarisi disebut child class menggunakan keyword <b>extends</b>
- Membuat class Pengguna dengan atribut nama dan metode getNama().
 ```bash
   public function getNama() {
        return $this->nama;
    }
 ```
- Instansiasi objek dari class Dosen
```bash
$dosen1 = new Dosen("Prih Diantono Abda'u", "Pemrograman Web 2 PHP");
```
## Polymorphism (Polimorfisme)<br>
```bash
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
  //Instalisasi objek dari Dosen dan Mahasiswa
   $dosen1 = new Dosen ();
  $dosen1 ->aksesFitur(); //Output Fitur Dosen
  echo "<br>";
  $mahasiswa1 = new Mahasiswa();
  $mahasiswa1->aksesFitur(); //Output dari fitur mahasiswa
  ?>
  ```
## Abstraction <br>
Abstraction merupakan konsep di mana kita hanya menampilkan informasi penting dari sebuah objek dan menyembunyikan detail implementasi yang tidak diperlukan, untuk fokus pada apa yang dilakukan suatu objek daripada bagaimana cara kerjanya.
```bash
abstract class Pengguna {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode abstrak yang harus diimplementasikan oleh class turunan
    abstract public function aksesFitur();
}
```
## Output Jobsheet 1
1. Class dan Object<br>
![Screenshot 2024-09-10 111545](https://github.com/user-attachments/assets/38ea06df-9161-4b7c-8c87-f68480a25c65) <br>
2. Enkapsulasi (Encapsulation)<br>
![Screenshot 2024-09-10 111612](https://github.com/user-attachments/assets/e372d3b6-9a51-486c-87ff-b3af643791aa) <br>
3. Inheritance (Pewarisan)<br>
![Screenshot 2024-09-10 111633](https://github.com/user-attachments/assets/987bb67f-057c-4246-a4f4-17a0874a396b) <br>
4. Polymorphism (Polimorfisme)<br>
![Screenshot 2024-09-10 111701](https://github.com/user-attachments/assets/3db6f497-93fc-4d55-a72c-becc8b8a2160) <br>
5. Abstraction<br>
![Screenshot 2024-09-10 111719](https://github.com/user-attachments/assets/875eb6bc-e7f8-44a0-9d5d-0ac786a89250) <br>

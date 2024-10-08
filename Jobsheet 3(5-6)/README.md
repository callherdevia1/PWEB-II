<h1>🗒️ JOBSHEET 3</h1>
Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP.

Dalam Jobsheet 3 Memahami dan menerapkan konsep Inheritance dalam PHP, Menerapkan Polymorphism untuk mencapai fleksibilitas dalam kode, Menggunakan Encapsulation untuk melindungi data dalam objek, Mengimplementasikan Abstraction untuk menyederhanakan kompleksitas sistem.<br>
## 1. Inheritance (Pewarisan)
- <b>Kelas Person</b> <br>
  ```
  class Person { //Membuat Class Person
    protected $name; //Atribut menyimpan Nama

    //Metode mendapatkan nama
    public function getName() {
        return $this->name;
    }
    
    // Setter untuk mengatur nama
    public function setName($name) {
        $this->name = $name;
    }
    ```
  Pada tahap pertama Jobsheet 3 Inheritance, membuat kelas person.Kelas         Person merupakan kelas induk yang digunakan sebagai dasar untuk kelas Dosen   dan Mahasiswa.<br>
  ```name atau$name``` bersifat protected yang berarti hanya bisa diakses       oleh kelas itu sendiri dan turunannya.
  - Details:
    ```
     class Person {
    ```
    dengan atribut name dan juga metode public function ```getName()```.<br>
  - Details:
    ```
    public function getName() {
        return $this->name;
      }
    ```
    ```getName()``` berfungsi untuk mengambil dan juga mendapatkan nilai dari          atribut ```name```.```setname()``` berfungsi untuk menetapkan nilai
- <b>Kelas Student Mewarisi Person</b> <br>
  ```
    class Student extends Person { //atribut studentID dan getStudentID
    private $studentID;

    public function getStudentID() {
        return $this->studentID;
    }

    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
    ```
  Interheritance memiliki ciri khas pewarisan dengan code ```extends```.        mewarisi properti dan metode dari kelas induknya.<br>
  Ditahap ini kelas student yang mewarisi dari class person serta                menambahkan atribut ```studentID``` dan juga dengan                            metode```getStudentID()```
  - Details getStudent:
    ```
    public function getStudentID() {
          return $this->studentID;
      }
    ```
  - <b>OUTPUT INHERITANCE</b> <br>
    ![Screenshot 2024-09-11 105116](https://github.com/user-attachments/assets/feb14c27-74a5-4aee-8425-b2c2f6d71cf4) <br>
    
## 2. Polymorphism
- <b>Kelas Teacher mewarisi Person</b> <br>
  ```
  class Teacher extends Person {
    private $teacherID;

    //Metode mendapatkan TeacherID
    public function getTeacherID() {
        return $this->teacherID;
    }
    
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher: " . $this->name;
    }
  ```
  Pada Polymorphism kelas Teacher mewarisi dari Class Person dengan melakukan
  ```extends``` serta menambahkan atribut ```teacherID```.
  - Details:
    ```
    class Teacher extends Person {
        private $teacherID;
    ```
  Menambahkan Override metode getName() di kelas Student dan Teacher untuk      menampilkan format yang berbeda.
  - Details:
    ```
      // Override metode getName() untuk Teacher
      public function getName() {
          return "Teacher: " . $this->name;
        }
    }
    ```
  - <b>OUTPUT POLYMORPHISM</b> <br>
    ![Screenshot 2024-09-11 105146](https://github.com/user-attachments/assets/d463814f-ac95-41a4-ab51-fb2e52f8675c) <br>
    
## 3. Encapsulation
```
class Person { 
    private $name;

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Getter untuk name
    public function getName() {
        return $this->name;
    }
}

class Student extends Person {
    private $studentID;
```
- <b>Ubah atribut name dan studentID dalam kelas Student menjadi private.</b>
  - Details:
    ```
    private $name;
    ```
    Name di kelas Person (kelas induk) diatur sebagai atribut private.
  - Details:
    ```
    private $studentID;
    ```
    studentID di kelas Student juga diatur sebagai atribut private<br>

    Menyembunyikan detail implementasi dengan menjadikan atribut name dan         studentID sebagai private, sehingga tidak dapat diakses langsung dari         luar kelas.
- <b>Tambah Metode Setter Dan Getter</b>
  - Details:
  Setter dan Getter di Atribut Name
  ```
    public function setName($name) {
          $this->name = $name;
      }

      // Getter untuk name
      public function getName() {
          return $this->name;
      }
    }  
    ```
  - Details:
  Setter dan Getter di Class StudentID
  ```
    public function setStudentID($studentID) {
          $this->studentID = $studentID;
      }

      // Getter untuk studentID
      public function getStudentID() {
          return $this->studentID;
      }

      // Override metode getName() untuk Student
      public function getName() {
          return "Student: " . parent::getName();
      }
    }
    ```
  Setter dan Getter digunakan untuk mengakses dan memodifikasi nilai atribut    name dan studentID supaya terstuukturu dan mudah dipahami.

  - <b>OUTPUT ENCAPSULATION</b> <br>
     ![Screenshot 2024-09-11 105211](https://github.com/user-attachments/assets/cdf8dc75-fbd2-4695-b9db-7a066801b037) <br>
    
## 4. Abstraction 
- <b>Kelas Abstrak Course Dengan Metode Abstrak getCourseDetails().</b>
  ```
    abstract class Course {
    protected $courseName;

    // Metode abstrak
    abstract public function getCourseDetails();
  }
  ```
  Kelas Course dideklarasikan sebagai abstrak, yang berarti kelas ini tidak     dapat diinstansiasi langsung. Metode ```getCourseDetails()``` juga            dideklarasikan sebagai abstrak, yang harus diimplementasikan oleh kelas       turunannya.

- <b>Kelas OnlineCourse dan OfflineCourse</b>
  - Details Online Course:
    ```
      class OnlineCourse extends Course {
    private $platform;

    public function setAttribbutes($courseName, $platform) {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " di aplikasi " .           $this->platform;
    }
    }
    ```
  - Details Offline Course
    ```
        class OfflineCourse extends Course {
          private $location;
    
        public function setAttribbutes($courseName, $location) {
            $this->courseName = $courseName;
            $this->location = $location;
        }
    
        // Implementasi metode abstrak
        public function getCourseDetails() {
            return "Offline Course: " . $this->courseName . " di tempat " .         $this->location;
        }
    }
    ```
    Kelas OnlineCourse dan OfflineCourse merupakan kelas turunan dari kelas       abstrak Course. Kelas OnlineCourse dan OfflineCourse mengimplementasikan       ```getCourseDetails()``` pada kelas ```Course```.

  - <b>OUTPUT ABSTRACTION</b> <br>
     ![Screenshot 2024-09-12 025901](https://github.com/user-attachments/assets/28377f8a-bd99-4e10-9a8d-a01dfc9fb5ff) <br>
    
<h1>🗒️ TUGAS</h1><br>

## 1. Implementasi Kelas Person Sebagai Induk Dosen dan Mahasiswa
   ```
      class Person {
        protected $name;

        // Metode untuk menampilkan peran, yang akan dioverride oleh kelas            turunan
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
   ```

Class dibuat dengan nama ```Person``` sebagai induk dari Dosen dan juga       Mahasiswa
## 2. Inheritance Kelas Dosen dan Mahasiswa
  - Kelas Dosen:
  ```
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
  ```
- Details:
  ```class Dosen extends Person {```
  
Ditahap kedua menggunakan konsep Inheritance atau pewarisan untuk membuat hierarki kelas Dosen. Inheritance khas dengan ```extends```.
  - Kelas Mahasiswa:
```
    class Mahasiswa extends Person {
    private $nim; // Encapsulation

    // Setter dan getter untuk NIM (Encapsulation)
    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }

    public function getRole() {
        return "Mahasiswa";
    }
}
```
- Details:
  ```class Mahasiswa extends Person { ```
Menggunakan konsep Inheritance atau pewarisan untuk membuat hierarki kelas Mahasiswa. Inheritance pewarisan khas dengan ```extends```.
## 3. Menerapkan Polymorphism Dengan Membuat Metode getRole()
```
public function getRole() {
    return "Dosen"; // Di dalam kelas Dosen
}

public function getRole() {
    return "Mahasiswa"; // Di dalam kelas Mahasiswa
}
```
Menggunakan metode ```public function getRole()``` untuk mengembalikan peran atau identitas dari objek yang memanggilnya. Override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang
berbeda.
- Details Penggunaan getRole()
  ```
  public function getRole() {
  ```
## 4. Encapsulation Melindungi Atribut NIDN
```
class Dosen extends Person {
    private $nidn;

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

class Mahasiswa extends Person {
    private $nim;

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}
```
Atribut NIDN dan NIM dilindungi ```private```, dan akses ke atribut tersebut dilakukan melalui ```Setter``` dan ```Getter```. Getter ```getNidn()``` dan ```getNim()``` digunakan untuk mengambil nilai dari atribut nidn dan nim.<br>
Setter ```setNidn()```dan ```setNim()``` digunakan untuk menetapkan nilai ke atribut tersebut, memastikan data dapat diakses dan dimodifikasi

- Details Melindungi NIDN dan NIM
  ```
  private $nidn;
  ```
- Details NIM
  ```
  private $nim;
  ```

## 5. Kelas Abstrak Jurnal Dan Implementasikan Konsep Abstraction
```
abstract class Jurnal {
    protected $title;

    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function getTitle() {
        return $this->title;
    }

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
```
Kelas ```Jurnal``` adalah kelas abstrak, dan kelas turunannya JurnalDosen dan juga  ```JurnalMahasiswa``` untuk mengimplementasikan metode ```submitJurnal()``` dengan caranya sendiri.

- <b>Instansiasi Object Dosen</b>
  ```
  $dosen1 = new Dosen();
  $dosen1->setName("Prih Diantono Abda'u");
  $dosen1->setNidn("123456789");
  ```
- <b>Instansiasi Object Mahasiswa</b>
  ```
  $mahasiswa1 = new Mahasiswa();
  $mahasiswa1->setName("Devia Kippuw");
  $mahasiswa1->setNim("230202031");
  ```
  Menggunakan ```new Mahasiswa()```
- <b>Instansiasi Object Jurnal Dosen</b>
  ```
  $jurnalDosen = new JurnalDosen();
  $jurnalDosen->setTitle("OOP Pemrograman Web");
  ```
  Menggunakan ```new JurnalDosen()```
- <b>Instansiasi Object Jurnal Mahasiswa</b>
  ```
  $jurnalMahasiswa = new JurnalMahasiswa();
  $jurnalMahasiswa->setTitle("ERD JKB-LC");
  ```
  Menggunakan ```new JurnalMahasiswa()```
- <b>OUTPUT TUGAS</b> <br>
  ![Screenshot 2024-09-12 075117](https://github.com/user-attachments/assets/aa1e4bdb-2878-4eac-b497-a775d6a24510)

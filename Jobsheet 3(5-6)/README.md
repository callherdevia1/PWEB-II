<h1>🗒️ JOBSHEET 3</h1>
Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP.

Dalam Jobsheet 3 Memahami dan menerapkan konsep Inheritance dalam PHP, Menerapkan Polymorphism untuk mencapai fleksibilitas dalam kode, Menggunakan Encapsulation untuk melindungi data dalam objek, Mengimplementasikan Abstraction untuk menyederhanakan kompleksitas sistem.<br>
## 1. Inheritance (Pewarisan)
- <b>Kelas Person</b> <br>
  ```
  class Person { //Membuat Class Person
      protected $name; //Atribut menyimpan Nama

      public function __construct($name) {
          $this->name = $name;
      }
      //Metode mendapatkan nama
        public function getName() {
        return $this->name;
      }
     }
    ```
  Pada tahap pertama Jobsheet 3 Inheritance, membuat kelas person.<br>
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
    ```getName()``` berfungsi untuk mengambil dan juga mendapatkan nilai dari          atribut sebelumnya.
- <b>Kelas Student Mewarisi Person</b> <br>
  ```
    class Student extends Person {
      private $studentID;

      public function __construct($name, $studentID) {
          parent::__construct($name);
          $this->studentID = $studentID;
      }

      public function getStudentID() {
          return $this->studentID;
      }
    }
    ```
  Interheritance memiliki ciri khas pewarisan dengan code ```extends```.
  - Details:
    ```
    class Student extends Person {
    ```
    Ditahap ini kelas student yang mewarisi dari class person serta                menambahkan atribut ```studentID``` dan juga dengan                            metode```getStudentID()```
  - Details getStudent:
    ```
    public function getStudentID() {
          return $this->studentID;
      }
    ```
## 2. Polymorphism
- <b>Kelas Teacher mewarisi Person</b> <br>
  ```
  class Teacher extends Person {
      private $teacherID;

      public function __construct($name, $teacherID) {
          parent::__construct($name);
          $this->teacherID = $teacherID;
      }

      public function getTeacherID() {
          return $this->teacherID;
      }
  ```
  Pada Polymorphism kelas Teacher mewarisi dari Class Person dengan melakukan
  ```extends``` serta menambahkan atribut ```teacherID```.
  - Details:
    ```
    class Teacher extends Person {
        private $teacherID;
    ```
  Menambahkan Override metode getName() di kelas Student dan Teacher untuk       menampilkan format berbeda.
  - Details:
    ```
      // Override metode getName() untuk Teacher
      public function getName() {
          return "Teacher: " . $this->name;
        }
    }
    ```
## 3. Encapsulation
```
class Person { 
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

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
  Setter dan Getter digunakan untuk mengakses dan memodifikasi nilai atribut    name dan studentID secara terkendali.

## 4. Abstraction 
- <b>Kelas Abstrak Course Dengan Metode Abstrak getCourseDetails().</b>
  ```
    abstract class Course {
      protected $courseName;

      public function __construct($courseName) {
          $this->courseName = $courseName;
      }

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

      public function __construct($courseName, $platform) {
          parent::__construct($courseName);
          $this->platform = $platform;
      }

      // Implementasi metode abstrak
      public function getCourseDetails() {
          return "Online Course: " . $this->courseName . " di aplikasi " .         $this->platform;
      }
    }
    ```
  - Details Offline Course
    ```
      class OfflineCourse extends Course {
      private $location;

      public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
      }

      // Implementasi metode abstrak
      public function getCourseDetails() {
      return "Offline Course: " . $this->courseName . " di tempat " . $this-        >location;
      }
    }
    ```
    Kelas OnlineCourse dan OfflineCourse merupakan kelas turunan dari kelas       abstrak Course. Kelas OnlineCourse dan OfflineCourse mengimplementasikan      ```getCourseDetails()``` pada kelas ```Course```.

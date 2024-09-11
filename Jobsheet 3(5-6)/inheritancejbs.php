<?php
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

//Instansiasi Objek Dari Class Student
$person1 = new Student("Devia Kippuw", "230202031");

//Menampilkan Data Student
echo "Nama Person: " ."<br>" . $person1->getName() . "<br>"; // Output: Nama Dosen: Devia Kippuw
echo "Student ID: " . $person1->getStudentID() . "<br>"; // Output: Student ID: 230202031
?>
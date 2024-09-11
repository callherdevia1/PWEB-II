<?php
class Person { 
    private $name;

    // Getter untuk name
    public function getName() {
        return $this->name;
    }
    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

}

class Student extends Person {
    private $studentID;

     // Getter untuk studentID
    public function getStudentID() {
        return $this->studentID;
    }
    
    // Setter untuk studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk Student
    public function getName() {
        return "Student: " . parent::getName();
    }
}
//Pewarisan Teacher dari Person
class Teacher extends Person {
    private $teacherID;

    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher: " . parent::getName();
    }
}

// Instansiasi objek dari kelas Student
$student1 = new Student();
$student1->setName("Devia Kippuw");
$studentID->setStudentID("230202031");

// Instansiasi objek dari kelas Teacher
$teacher1 = new Teacher();
$teacher1->setName("Bara Mulia Lubis");
$teacher1->teacherID("2002111785431");

// Menampilkan data Student
echo "Nama Person: " . "<br>" . $student1->getName() . "<br>"; 
echo "Student ID: " .  $student1->getStudentID() . "<br> <br>"; 

// Mengubah nama student menggunakan setter
$student1->setName("Devina Kipuw");
echo "Nama Person (Setelah diubah): " . "<br>" . $student1->getName() . "<br>"; 

// Menampilkan data Teacher
echo "Nama Person: " . "<br>" .  $teacher1->getName() . "<br>"; 
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>"; 
?>

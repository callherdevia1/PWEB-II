<?php
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

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    // Setter untuk studentID
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

class Teacher extends Person {
    private $teacherID;

    public function __construct($name, $teacherID) {
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }

    public function getTeacherID() {
        return $this->teacherID;
    }

    // Override metode getName() untuk Teacher
    public function getName() {
        return "Teacher: " . parent::getName();
    }
}

// Instansiasi objek dari kelas Student dan Teacher
$student1 = new Student("Devia Kippuw", "230202031");
$teacher1 = new Teacher("Bara Mulia Lubis", "2002111785431");

// Menampilkan data Student
echo "Nama Person: " . "<br>" . $student1->getName() . "<br>"; // Output: Student: Devia Kippuw
echo "Student ID: " .  $student1->getStudentID() . "<br> <br>"; // Output: Student ID: 230202031

// Mengubah nama student menggunakan setter
$student1->setName("Devina Kipuw");
echo "Nama Person (Setelah diubah): " . "<br>" . $student1->getName() . "<br>"; // Output: Student: Devina Kipuw

// Menampilkan data Teacher
echo "Nama Person: " . "<br>" .  $teacher1->getName() . "<br>"; // Output: Teacher: Bara Mulia Lubis
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>"; // Output: Teacher ID: 2002111785431
?>
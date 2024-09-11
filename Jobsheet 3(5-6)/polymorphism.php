<?php
class Person { 
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

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

    // Override metode getName() untuk Student
    public function getName() {
        return "Student: " . $this->name;
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
        return "Teacher: " . $this->name;
    }
}

// Instansiasi objek dari kelas Student dan Teacher
$student1 = new Student("Devia Kippuw", "230202031");
$teacher1 = new Teacher("Bara Mulia Lubis", "2002111785431");

// Menampilkan data Student
echo "Nama Person: " . "<br>" . $student1->getName() . "<br>"; // Output: Student: Devia Kippuw
echo "Student ID: " .  $student1->getStudentID() . "<br> <br>"; // Output: Student ID: 230202031

// Menampilkan data Teacher
echo "Nama Person: " . "<br>" .  $teacher1->getName() . "<br>"; // Output: Teacher: Bara Mulia Lubis
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>"; // Output: Teacher ID: 20021117854314
?>

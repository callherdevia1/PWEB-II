<?php
class Person { //Membuat class person
    protected $name;

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
}

class Student extends Person {
    private $studentID;

   
    public function getStudentID() {
        return $this->studentID;
    }
    
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }

    // Override metode getName() untuk Student
    public function getName() {
        return "Student: " . $this->name;
    }
}
//Class teacher mewarisi person
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
}

// Instansiasi objek dari kelas Student
$student1 = new Student();
$student1->setname("Devia Kippuw");
$student1->setstudentID("230202031");
// Instansiasi objek dari kelas Teacher
$teacher1 = new Teacher();
$teacher1->setname("Bara Mulia Lubis");
$teacher1->setTeacherID("2002111785431");

// Menampilkan data Student
echo "Nama Person: " . "<br>" . $student1->getName() . "<br>"; 
echo "Student ID: " .  $student1->getStudentID() . "<br> <br>"; 

// Menampilkan data Teacher
echo "Nama Person: " . "<br>" .  $teacher1->getName() . "<br>"; 
echo "Teacher ID: " . $teacher1->getTeacherID() . "<br>"; 
?>

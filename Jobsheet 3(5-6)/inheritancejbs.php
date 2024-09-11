<?php
class Person { //Membuat Class Person
    protected $name; //Atribut menyimpan Nama

    //Metode mendapatkan nama
    public function getName() {
        return $this->name;
    }
              
}
//Class student mewarisi dari person
class Student extends Person { //atribut studentID dan getStudentID
    private $studentID;

    public function getStudentID() {
        return $this->studentID;
    }

}

//Instansiasi Objek Dari Class Student
$person1 = new Student();
$person1->name ="Devia Kippuw";
$person1->studentID ="230202031";

//Menampilkan Data Student
echo "Nama Person: " ."<br>" . $person1->getName() . "<br>"; 
echo "Student ID: " . $person1->getStudentID() . "<br>";
?>

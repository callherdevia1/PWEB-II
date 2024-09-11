<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    // Metode abstrak
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse mewarisi Course
class OnlineCourse extends Course {
    private $platform;

    public function setAttribbutes($courseName, $platform) {
        $this->courseName = $courseName;
        $this->platform = $platform;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Online Course: " . $this->courseName . " di aplikasi " . $this->platform;
    }
}

// Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    private $location;

    public function setAttribbutes($courseName, $location) {
        $this->courseName = $courseName;
        $this->location = $location;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " di tempat " . $this->location;
    }
}

// Instansiasi objek dari kelas OnlineCourse 
$onlineCourse = new OnlineCourse();
$onlineCourse->setAttribbutes("Desain Interaksi Pengguna", "Google Meet");
// Instansiasi objek dari kelas OfflineCourse 
$offlineCourse = new OfflineCourse();
$offlineCourse->setAttribbutes("Praktikum Web 2", "GTIL J.5.7");

// Menampilkan detail course
echo $onlineCourse->getCourseDetails() . "<br>";  
echo $offlineCourse->getCourseDetails() . "<br>"; 
?>

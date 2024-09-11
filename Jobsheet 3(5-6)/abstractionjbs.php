<?php
// Kelas abstrak Course
abstract class Course {
    protected $courseName;

    public function __construct($courseName) {
        $this->courseName = $courseName;
    }

    // Metode abstrak
    abstract public function getCourseDetails();
}

// Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    private $platform;

    public function __construct($courseName, $platform) {
        parent::__construct($courseName);
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

    public function __construct($courseName, $location) {
        parent::__construct($courseName);
        $this->location = $location;
    }

    // Implementasi metode abstrak
    public function getCourseDetails() {
        return "Offline Course: " . $this->courseName . " di tempat " . $this->location;
    }
}

// Instansiasi objek dari kelas OnlineCourse dan OfflineCourse
$onlineCourse = new OnlineCourse("Desain Interaksi Pengguna", "Google Meet");
$offlineCourse = new OfflineCourse("Praktikum Web 2", "PNC Cilacap");

// Menampilkan detail course
echo $onlineCourse->getCourseDetails() . "<br>";  // Output: Online Course: Web Development on platform Udemy
echo $offlineCourse->getCourseDetails() . "<br>"; // Output: Offline Course: Data Science at location New York
?>
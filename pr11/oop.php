<?php

class Student {
 
    public $name;
    public $age;
    private $marks; 


    public function __construct($name, $age, $marks) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
    }


    public function displayInfo() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age <br>";
        echo "Marks: $this->marks <br>";
    }


    public function getMarks() {
        return $this->marks;
    }


    public function setMarks($marks) {
        $this->marks = $marks;
    }
}


$student1 = new Student("Tom", 21, 88);
$student1->displayInfo();

echo "<hr>";


class CollegeStudent extends Student {
    public $college;

    public function __construct($name, $age, $marks, $college) {
        parent::__construct($name, $age, $marks); // Call parent constructor
        $this->college = $college;
    }

    public function displayCollege() {
        echo "College: $this->college <br>";
    }
}

$student2 = new CollegeStudent("Alice", 22, 92, "ABC College");
$student2->displayInfo();
$student2->displayCollege();

echo "<hr>";



interface Exam {
    public function calculateGrade();
}

abstract class Person {
    abstract public function getRole();
}

class GraduateStudent extends Person implements Exam {
    public $name;
    public $marks;

    public function __construct($name, $marks) {
        $this->name = $name;
        $this->marks = $marks;
    }

    public function getRole() {
        return "Graduate Student";
    }

    public function calculateGrade() {
        if ($this->marks >= 90) return "A+";
        elseif ($this->marks >= 80) return "A";
        elseif ($this->marks >= 70) return "B";
        else return "C";
    }
}

$student3 = new GraduateStudent("Bob", 87);
echo $student3->name . " is a " . $student3->getRole() . "<br>";
echo "Grade: " . $student3->calculateGrade() . "<br>";

echo "<hr>";

trait Sports {
    public function playSport($sport) {
        echo "Playing $sport <br>";
    }
}

class Athlete {
    use Sports;
}

$athlete = new Athlete();
$athlete->playSport("Football");

echo "<hr>";

class Utils {
    public static $school = "XYZ School";

    public static function showSchool() {
        echo "School Name: " . self::$school . "<br>";
    }
}

Utils::showSchool();

?>

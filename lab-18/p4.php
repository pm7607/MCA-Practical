<?php
class Student {
    public $name;
    public $rollNumber;

    public function __construct($name, $rollNumber) {
        $this->name = $name;
        $this->rollNumber = $rollNumber;
        echo "Student $this->name with Roll No: $this->rollNumber is created.<br>";
    }

    public function __destruct() {
        echo "Student $this->name is destroyed.<br>";
    }
}

$student1 = new Student("Rahul", 101);
?>

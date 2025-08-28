<?php
class Student {
    private $name;
    private $grades = [];

    public function setName($name) {
        $this->name = $name;
    }

    public function addGrade($grade) {
        $this->grades[] = $grade;
    }

    public function getAverage() {
        if (count($this->grades) === 0) return 0;
        return array_sum($this->grades) / count($this->grades);
    }
}

$s = new Student();
$s->setName("Pratik");
$s->addGrade(85);
$s->addGrade(90);
$s->addGrade(75);

echo "Average Grade: " . $s->getAverage() . "\n";
?>

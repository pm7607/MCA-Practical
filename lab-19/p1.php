<?php
class Employee {
    protected $name;
    protected $salary;

    public function inputDetails($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function displayDetails() {
        echo "Name: {$this->name}, Salary: {$this->salary}\n";
    }
}

class Manager extends Employee {
    private $department;

    public function inputDetails($name, $salary, $department) {
        parent::inputDetails($name, $salary);
        $this->department = $department;
    }

    public function displayDetails() {
        parent::displayDetails();
        echo "Department: {$this->department}\n";
    }
}

$mgr = new Manager();
$mgr->inputDetails("Pratik", 50000, "IT");
$mgr->displayDetails();
?>

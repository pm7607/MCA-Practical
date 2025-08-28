<?php
class Employee {
    private $name;
    private $basicSalary;

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        if ($salary > 0) {
            $this->basicSalary = $salary;
        } else {
            echo "Invalid salary.\n";
        }
    }

    private function calculateTax() {
        return $this->basicSalary * 0.12;
    }

    public function getNetSalary() {
        return $this->basicSalary - $this->calculateTax();
    }

    public function display() {
        echo "Employee: {$this->name}, Net Salary: " . $this->getNetSalary() . "\n";
    }
}

$e = new Employee();
$e->setName("pratik");
$e->setSalary(40000);
$e->display();
?>

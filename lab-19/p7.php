<?php
class Person {
    protected $firstName;
    protected $lastName;

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getFullName() {
        return "{$this->firstName} {$this->lastName}";
    }
}

class Employee extends Person {
    private $employeeId;

    public function setEmployeeId($id) {
        $this->employeeId = $id;
    }

    public function getEmployeeId() {
        return $this->employeeId;
    }
}

$emp = new Employee();
$emp->setFirstName("Pratik");
$emp->setLastName("Mehta");
$emp->setEmployeeId("E123");

echo "Name: " . $emp->getFullName() . "\n";
echo "Employee ID: " . $emp->getEmployeeId() . "\n";
?>

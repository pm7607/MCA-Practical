<?php
class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function display() {
        echo "Vehicle: {$this->make} {$this->model}\n";
    }
}

class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $doors) {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    public function display() {
        echo "Car: {$this->make} {$this->model}, Doors: {$this->doors}\n";
    }
}

class Motorcycle extends Vehicle {
    private $type;

    public function __construct($make, $model, $type) {
        parent::__construct($make, $model);
        $this->type = $type;
    }

    public function display() {
        echo "Motorcycle: {$this->make} {$this->model}, Type: {$this->type}\n";
    }
}

$vehicles = [
    new Car("Toyota", "Camry", 4),
    new Motorcycle("Yamaha", "R15", "Sport")
];

foreach ($vehicles as $v) {
    $v->display(); 
}
?>

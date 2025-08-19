<?php
class Vehicle {
    public $brand;
    public $model;
    public $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function displayDetails() {
        echo "Brand: $this->brand, Model: $this->model, Year: $this->year<br>";
    }
}


$car = new Vehicle("Toyota", "Corolla", 2020);
$car->displayDetails();
?>

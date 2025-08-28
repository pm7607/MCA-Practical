<?php
class Product {
    protected $name;
    protected $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getProductInfo() {
        return "Product: {$this->name}, Price: {$this->price}";
    }
}

class Book extends Product {
    private $author;

    public function __construct($name, $price, $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    public function getProductInfo() {
        return parent::getProductInfo() . ", Author: {$this->author}";
    }
}

class Electronics extends Product {
    private $warrantyPeriod;

    public function __construct($name, $price, $warrantyPeriod) {
        parent::__construct($name, $price);
        $this->warrantyPeriod = $warrantyPeriod;
    }

    public function getProductInfo() {
        return parent::getProductInfo() . ", Warranty: {$this->warrantyPeriod} years";
    }
}
$book = new Book("PHP Basics", 300, "Pratik M.");
$elec = new Electronics("Laptop", 50000, 2);
echo $book->getProductInfo() . "\n";
echo $elec->getProductInfo() . "\n";
?>

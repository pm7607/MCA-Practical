<?php
class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }

    public function perimeter() {
        return 2 * ($this->length + $this->width);
    }
}

$rect = new Rectangle(10, 5);
echo "Area: " . $rect->area() . "<br>";
echo "Perimeter: " . $rect->perimeter();
?>

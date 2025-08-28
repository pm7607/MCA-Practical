<?php
class Circle {
    private $radius;

    public function setRadius($r) {
        if ($r > 0) {
            $this->radius = $r;
        } else {
            echo "Radius must be positive.\n";
        }
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

$c = new Circle();
$c->setRadius(5);
echo "Area: " . $c->getArea() . "\n";
?>

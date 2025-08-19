<?php
class Counter {
    public $count;

    public function __construct($count = 0) {
        $this->count = $count;
    }

    public function increment() {
        $this->count++;
    }

    public function getCount() {
        return $this->count;
    }
}
$c1 = new Counter();
$c1->increment();
$c1->increment();
echo "Counter 1: " . $c1->getCount() . "<br>";

$c2 = new Counter(5);
$c2->increment();
echo "Counter 2: " . $c2->getCount();
?>
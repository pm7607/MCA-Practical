<?php
class Book {
    public $title;
    public $author;
    public $price;

    public function inputDetails($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function displayDetails() {
        echo "Title: $this->title, Author: $this->author, Price: $this->price<br>";
    }
}

$book1 = new Book();
$book1->inputDetails("demo", "demo", 350);
$book1->displayDetails();

$book2 = new Book();
$book2->inputDetails("demo", "demo", 100);
$book2->displayDetails();
?>

<?php
class LibraryItem {
    protected $title;
    protected $year;

    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }

    public function displayInfo() {
        echo "Title: {$this->title}, Year: {$this->year}\n";
    }
}

class Book extends LibraryItem {
    private $author;

    public function __construct($title, $year, $author) {
        parent::__construct($title, $year);
        $this->author = $author;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Author: {$this->author}\n";
    }
}

class DVD extends LibraryItem {
    private $duration;

    public function __construct($title, $year, $duration) {
        parent::__construct($title, $year);
        $this->duration = $duration;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Duration: {$this->duration} mins\n";
    }
}

$book = new Book("OOP in PHP", 2023, "Pratik M.");
$dvd = new DVD("Inception", 2010, 148);

$book->displayInfo();
$dvd->displayInfo();
?>

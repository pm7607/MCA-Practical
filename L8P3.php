<!-- WAP to create multidimensional array and print it. -->
<?php
$students = array(
    array("John", 20, "A"),
    array("Doe", 22, "B"),
    array("Mark", 19, "C")
);

foreach ($students as $student) {
    echo implode(", ", $student) . "<br>";
}
?>

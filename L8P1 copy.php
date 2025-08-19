<!-- WAP to create numeric array and print it. -->
<?php
$numbers = array(10, 20, 30, 40, 50);
print_r($numbers);
echo "<br> Array elements:<br>";
foreach ($numbers as $number) {
    echo $number . "<br>";
}
?>
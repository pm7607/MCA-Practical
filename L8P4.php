<!-- WAP to find the average of n number using array. -->
<?php
$numbers = array(10, 20, 30, 40, 50);
$sum = array_sum($numbers);
$average = $sum / count($numbers);
echo "Average: " . $average;
?>

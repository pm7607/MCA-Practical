<!-- Find the Kth largest and Kth smallest number in an array. -->
<?php
$numbers = array(10, 30, 20, 50, 40);
sort($numbers); // Ascending
$k = 2;

echo "Kth smallest: " . $numbers[$k - 1] . "<br>";
rsort($numbers); // Descending
echo "Kth largest: " . $numbers[$k - 1];
?>

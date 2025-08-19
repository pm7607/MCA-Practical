<!-- WAP to accept n numbers in an array. Display the sum of all the numbers which are divisible by either 3 or 5. -->
<?php
$numbers = array(3, 5, 7, 15, 20, 23, 30);
$sum = 0;

foreach ($numbers as $num) {
    if ($num % 3 == 0 || $num % 5 == 0) {
        $sum += $num;
    }
}
echo "Sum of numbers divisible by 3 or 5: $sum";
?>

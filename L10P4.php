<!-- WAP to calculate simple interest using method. -->
<?php
function calculateSimpleInterest($principal, $rate, $time) {
    $interest = ($principal * $rate * $time) / 100;
    return $interest;
}

$si = calculateSimpleInterest(1000, 5, 2);
echo "Simple Interest is: $si<br>";
?>

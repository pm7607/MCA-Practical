<!-- WAP to find sum of all odd array elements by passing array as an argument using user defined functions. -->
<?php
function sumOddElements($arr) {
    $sum = 0;
    foreach ($arr as $value) {
        if ($value % 2 != 0) {
            $sum += $value;
        }
    }
    return $sum;
}

$numbers = [1, 2, 3, 4, 5, 6, 7];
echo "Sum of odd elements: " . sumOddElements($numbers);
?>

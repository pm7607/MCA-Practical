<!-- Find first Subarray with given sum. -->
<?php
function subarrayWithSum($arr, $target) {
    $n = count($arr);
    for ($i = 0; $i < $n; $i++) {
        $sum = $arr[$i];
        for ($j = $i + 1; $j <= $n; $j++) {
            if ($sum == $target) {
                return array_slice($arr, $i, $j - $i);
            }
            if ($j == $n || $sum > $target) break;
            $sum += $arr[$j];   // Add next element to the sum 
        }
    }
}

$arr = array(1, 2, 3, 7, 5);
$target = 12;
$result = subarrayWithSum($arr, $target);

if ($result) {
    echo "Subarray with given sum: " . implode(", ", $result);
} else {
    echo "No subarray with the given sum found.";
}
?>

<!-- WAP to sort given array in descending order without using inbuilt function.  -->
 <?php
$numbers = array(10, 3, 5, 8, 1);
$n = count($numbers);

// Bubble sort descending
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($numbers[$i] < $numbers[$j]) {
            $temp = $numbers[$i];
            $numbers[$i] = $numbers[$j];
            $numbers[$j] = $temp;
        }
    }
}

print_r($numbers);
?>

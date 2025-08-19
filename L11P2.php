<?php
function sumOfN($n) {
    if ($n == 0) {
        return 0;
    }
    return $n + sumOfN($n - 1);
}
$n = 10;
echo "\nSum of first $n numbers is: " . sumOfN($n);
?>

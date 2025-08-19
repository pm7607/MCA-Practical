<?php
function isPrime($n, $i = 2) {
    if ($n <= 2) {
        return ($n == 2);
    }
    if ($n % $i == 0) {
        return false; 
    }
    if ($i * $i > $n) {
        return true;
    }
    return isPrime($n, $i + 1);
}

$number = 4;

if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>

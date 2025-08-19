<!-- WAP to generate Fibonacci series of N given number using method. -->
<?php
function fibonacciSeries($n) {
    $a = 0;
    $b = 1;
    echo "Fibonacci Series: ";
    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    }
    echo "<br>";
}

fibonacciSeries(10);
?>

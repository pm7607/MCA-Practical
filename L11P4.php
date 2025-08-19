<?php
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}
$terms = 10;
echo "Fibonacci series up to $terms terms:<br>";
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i) . " ";
}
?>

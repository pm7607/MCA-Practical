<?php
function printDescending($n) {
    if ($n < 1) {
        return;
    }
    echo $n . " ";
    printDescending($n - 1);
}
$n = 10;
echo "Numbers from $n to 1:\n";
printDescending($n);
?>

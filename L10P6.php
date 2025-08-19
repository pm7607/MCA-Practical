<!-- WAP for simple calculator with the use of simple calculator. -->
<?php
function calculator($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $b != 0 ? $a / $b : "Error: Division by zero";
        default:
            return "Invalid Operator";
    }
}

echo "Addition: " . calculator(10, 5, '+') . "<br>";
echo "Subtraction: " . calculator(10, 5, '-') . "<br>";
echo "Multiplication: " . calculator(10, 5, '*') . "<br>";
echo "Division: " . calculator(10, 5, '/') . "<br>";
?>

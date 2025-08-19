<!-- Write a PHP script that performs the following tasks using PHP built-in number functions:
$numbers = [-3.7, 2.4, -1.2, 5.75];
- Get the absolute value of each number in $numbers.
- Round each number in $numbers to the nearest integer.
- Find the ceiling and floor values of each number in $numbers.
- Calculate the square root of 4 and 4 raised to the power of 3.
- Find the maximum and minimum values in the array [5, 10, -2, 8].
- Generate 5 random integers between 1 and 100.
- Calculate the floating-point remainder of 5.75 divided by 1.2.
- Format the number 1234.5678 with 2 decimals and a comma as the thousand separators.
- Convert the string "123.45abc" to float and integer types.
- Check which of these values are int, float, numeric, or NaN: 123, 12.3, "abc", "123", NAN.
- Check if values true, INF, 0.5, and null are bool, infinite, finite, or null.
- Convert decimal 255 to hexadecimal, octal, and binary, then convert "ff" (hex) and "377" (octal) back to decimal.
- Check if a variable $var = 0 is set, empty, unset it, and then check if it is set again. -->

<?php


$numbers = [-3.7, 2.4, -1.2, 5.75];
echo "<h3>Working with numbers: " . implode(', ', $numbers) . "</h3>";

// 1. Absolute values
echo "<b>Absolute Values:</b><br>";
foreach ($numbers as $num) {
    echo "abs($num) = " . abs($num) . "<br>";
}

// 2. Rounding to nearest integer
echo "<br><b>Rounded Values:</b><br>";
foreach ($numbers as $num) {
    echo "round($num) = " . round($num) . "<br>";
}

// 3. Ceiling and Floor
echo "<br><b>Ceiling and Floor:</b><br>";
foreach ($numbers as $num) {
    echo "ceil($num) = " . ceil($num) . " | floor($num) = " . floor($num) . "<br>";
}

// 4. Square root and Power
echo "<br><b>Math Operations:</b><br>";
echo "sqrt(4) = " . sqrt(4) . "<br>";
echo "pow(4, 3) = " . pow(4, 3) . "<br>";

// 5. Max and Min
$arr = [5, 10, -2, 8];
echo "<br><b>Max/Min in [5, 10, -2, 8]:</b><br>";
echo "Max: " . max($arr) . "<br>";
echo "Min: " . min($arr) . "<br>";

// 6. Random integers
echo "<br><b>Random Integers between 1 and 100:</b><br>";
for ($i = 0; $i < 5; $i++) {
    echo rand(1, 100) . " ";
}
echo "<br>";

// 7. Floating-point remainder
echo "<br><b>Floating-point Remainder of 5.75 ÷ 1.2:</b><br>";
echo "fmod(5.75, 1.2) = " . fmod(5.75, 1.2) . "<br>";

// 8. Number formatting
echo "<br><b>Formatted Number:</b><br>";
echo number_format(1234.5678, 2, '.', ',') . "<br>";

// 9. Convert string to float and integer
$str = "123.45abc";
echo "<br><b>Type Conversion:</b><br>";
echo "(float)'$str' = " . (float)$str . "<br>";
echo "(int)'$str' = " . (int)$str . "<br>";

// 10. Type checks
$values = [123, 12.3, "abc", "123", NAN];
echo "<br><b>Type Checks:</b><br>";
foreach ($values as $val) {
    echo "Value: ";
    var_export($val);
    echo "<br>";
    echo " - is_int: " . (is_int($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_float: " . (is_float($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_numeric: " . (is_numeric($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_nan: " . ((is_float($val) && is_nan($val)) ? 'Yes' : 'No') . "<br><br>";
}

// 11. More type checks
$checkVals = [true, INF, 0.5, null];
echo "<br><b>More Type Checks:</b><br>";
foreach ($checkVals as $val) {
    echo "Value: ";
    var_export($val);
    echo "<br>";
    echo " - is_bool: " . (is_bool($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_infinite: " . (is_infinite($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_finite: " . (is_finite($val) ? 'Yes' : 'No') . "<br>";
    echo " - is_null: " . (is_null($val) ? 'Yes' : 'No') . "<br><br>";
}




// 12. Number system conversions
echo "<br><b>Number System Conversions:</b><br>";
$dec = 255;
echo "Decimal 255 to Hex: " . dechex($dec) . "<br>";
echo "Decimal 255 to Octal: " . decoct($dec) . "<br>";
echo "Decimal 255 to Binary: " . decbin($dec) . "<br>";

echo "'ff' (hex) to Decimal: " . hexdec("ff") . "<br>";
echo "'377' (octal) to Decimal: " . octdec("377") . "<br>";

// 13. Variable set/empty/unset
echo "<br><b>Variable Check:</b><br>";
$var = 0;
echo "Is \$var set? " . (isset($var) ? "Yes" : "No") . "<br>";
echo "Is \$var empty? " . (empty($var) ? "Yes" : "No") . "<br>";
unset($var);
echo "After unset, is \$var set? " . (isset($var) ? "Yes" : "No") . "<br>";
?>

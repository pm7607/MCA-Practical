<!-- WAP to accept n numbers in an array. Now, enter a number and search whether the number is present or not in the list of array elements by using linear search. -->
 <?php
$numbers = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

foreach ($numbers as $num) {
    if ($num == $search) {
        $found = true;
        break;
    }
}

if ($found)
    echo "$search is found in the array.";
else
    echo "$search is not found in the array.";
?>

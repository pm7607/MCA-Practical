<!-- Create a PHP script that performs the following operations on an array of names (strings). Use array_map() function and string functions to manipulate the array values:
$names = [" Alice ", "JessiCA", " charlie", "DAVID", "eVa", "AleXa", "Olivia", " Levi "];
- Trim leading and trailing whitespace from each name.
- Convert all names to lowercase.
- Capitalize the 􏰀rst letter of each name.
- Find and display the length of each name.
- Reverse each name and display the reversed names.
- Check if any name contains the substring "vi" (case-insensitive). Print those names. - Join all names into a single string separated by a comma and a space. -->


<?php
$names = [" Alice ", "JessiCA", " charlie", "DAVID", "eVa", "AleXa", "Olivia", " Levi "];

/* Step 1: Trim leading and trailing whitespace */
$trimmedNames = array_map('trim', $names);
echo "Trimmed Names:\n";
print_r($trimmedNames);

/* Step 2: Convert all names to lowercase */
$lowercaseNames = array_map('strtolower', $trimmedNames);
echo "\nLowercase Names:\n";
print_r($lowercaseNames);

/* Step 3: Capitalize the first letter of each name */
$capitalizedNames = array_map('ucfirst', $lowercaseNames);
echo "\nCapitalized Names:\n";
print_r($capitalizedNames);

/* Step 4: Find and display the length of each name */
$nameLengths = array_map('strlen', $capitalizedNames);
echo "\nLength of Each Name:\n";
foreach ($capitalizedNames as $index => $name) {
    echo "$name: {$nameLengths[$index]} characters\n";
}

/* Step 5: Reverse each name */
$reversedNames = array_map('strrev', $capitalizedNames);
echo "\nReversed Names:\n";
print_r($reversedNames);

/* Step 6: Check if any name contains the substring "vi" (case-insensitive) */
echo "\nNames containing 'vi' (case-insensitive):\n";
foreach ($capitalizedNames as $name) {
    if (stripos($name, 'vi') !== false) {
        echo $name . "\n";
    }
}

/* Step 7: Join all names into a single string separated by a comma and a space */
$joinedNames = implode(", ", $capitalizedNames);
echo "\nJoined Names String:\n$joinedNames\n";
?>

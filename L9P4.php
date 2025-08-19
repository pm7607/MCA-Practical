<!-- Write a PHP script that performs the following tasks using PHP built-in string functions:
$text = " Hello, World! Welcome to PHP programming. ";
- Display the length of the string.
- Convert the entire string to uppercase and lowercase.
- Capitalize only the 􏰀rst character of the string.
- Capitalize the 􏰀rst character of each word in the string.
- Find and display the position of the 􏰀rst occurrence of the substring "World".
- Replace the word "World" with "Universe" and display the result.
- Extract and display the substring "Welcome to PHP" from $text.
$htmlString = "Hello World";
- Convert new lines "\n" in a multiline string into HTML
tags.
- Remove any backslashes from a string with escape characters, for example:
$escapedString = "Hello\\ World\\!";
- Display the character corresponding to ASCII value 65 using chr().
- Display the ASCII value of the character 'A' using ord().
- Compare two strings "apple" and "Apple" both case-sensitively and case-insensitively, displaying the results of the comparisons. -->

<?php
$text = " Hello, World! Welcome to PHP programming. ";

echo "<h3>Original Text:</h3>";
echo $text . "<br><br>";

// 1. Display length of the string
echo "<b>Length of string:</b> " . strlen($text) . "<br>";

// 2. Convert to uppercase and lowercase
echo "<b>Uppercase:</b> " . strtoupper($text) . "<br>";
echo "<b>Lowercase:</b> " . strtolower($text) . "<br>";

// 3. Capitalize first character only
echo "<b>Ucfirst:</b> " . ucfirst(trim($text)) . "<br>";

// 4. Capitalize first character of each word
echo "<b>Ucwords:</b> " . ucwords(trim($text)) . "<br>";

// 5. Position of the first occurrence of "World"
$position = strpos($text, "World");
echo "<b>Position of 'World':</b> " . ($position !== false ? $position : "Not found") . "<br>";

// 6. Replace "World" with "Universe"
$replaced = str_replace("World", "Universe", $text);
echo "<b>After Replacement:</b> " . $replaced . "<br>";

// 7. Extract "Welcome to PHP"
$substring = substr($text, strpos($text, "Welcome"), strlen("Welcome to PHP"));
echo "<b>Substring ('Welcome to PHP'):</b> " . $substring . "<br><br>";

// 8. Convert new lines to <br>
$multiline = "Hello\nWorld\nPHP!";
echo "<b>nl2br() Example:</b><br>" . nl2br($multiline) . "<br><br>";

// 9. Remove backslashes from escaped string
$escapedString = "Hello\\ World\\!";
echo "<b>Original Escaped String:</b> $escapedString<br>";
echo "<b>After stripslashes():</b> " . stripslashes($escapedString) . "<br><br>";

// 10. Display character for ASCII value 65
echo "<b>chr(65):</b> " . chr(65) . "<br>";

// 11. Display ASCII value of 'A'
echo "<b>ord('A'):</b> " . ord('A') . "<br><br>";

// 12. Compare "apple" vs "Apple"
$caseSensitive = strcmp("apple", "Apple");
$caseInsensitive = strcasecmp("apple", "Apple");

echo "<b>strcmp('apple', 'Apple'):</b> " . $caseSensitive . "<br>";
echo "<b>strcasecmp('apple', 'Apple'):</b> " . $caseInsensitive . "<br>";
?>

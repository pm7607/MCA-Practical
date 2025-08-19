<!-- Create a PHP script that performs the following tasks using the associative array of student names and their scores: $students = [
"Alice" => 85, "Bob" => 78, "Charlie" => 92, "David" => 67, "Eve" => 90
];
- Display the total number of students in the array.
- Print all student names separately.
- Print all scores separately.
- Calculate and display the sum and product of all student scores.
- Find and display the lowest and highest scores in the array.
- Check if any student has scored exactly 90, and display the result. - Find and display the name of the student who scored 92.
- Sort and display the students by their scores in ascending order.
- Sort and display the students by their scores in descending order.
- Sort and display the students by their names in alphabetical order (A-Z).
- Sort and display the students by their names in reverse alphabetical order (Z-A). - Merge the $students array with another associative array of students: $newStudents = [
"Frank" => 75,
"Grace" => 88 ];
- Display the merged result using both array_merge() and array_merge_recursive() and explain the difference. - Extract and display the 􏰀rst 3 students from the original $students array using array_slice().  -->

<?php
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "David" => 67,
    "Eve" => 90
];

// 1. Total number of students
echo "<b>Total students:</b> " . count($students) . "<br><br>";

// 2. Print all student names
echo "<b>Student Names:</b><br>";
foreach (array_keys($students) as $name) {
    echo $name . "<br>";
}

// 3. Print all scores
echo "<br><b>Student Scores:</b><br>";
foreach (array_values($students) as $score) {
    echo $score . "<br>";
}

// 4. Sum and product of all scores
echo "<br><b>Sum of scores:</b> " . array_sum($students) . "<br>";
echo "<b>Product of scores:</b> " . array_product($students) . "<br>";

// 5. Lowest and highest scores
echo "<br><b>Lowest Score:</b> " . min($students) . "<br>";
echo "<b>Highest Score:</b> " . max($students) . "<br>";

// 6. Check if any student scored exactly 90
echo "<br><b>Is any score exactly 90?</b> ";
echo in_array(90, $students) ? "Yes" : "No";
echo "<br>";

// 7. Find the name of the student who scored 92
echo "<br><b>Student who scored 92:</b> ";
$studentName = array_search(92, $students);
echo $studentName ? $studentName : "Not found";
echo "<br>";

// 8. Sort students by scores (ascending)
$ascScores = $students;
asort($ascScores);
echo "<br><b>Sorted by Scores (Ascending):</b><br>";
foreach ($ascScores as $name => $score) {
    echo "$name => $score<br>";
}

// 9. Sort students by scores (descending)
$descScores = $students;
arsort($descScores);
echo "<br><b>Sorted by Scores (Descending):</b><br>";
foreach ($descScores as $name => $score) {
    echo "$name => $score<br>";
}

// 10. Sort students by name (A-Z)
$nameAsc = $students;
ksort($nameAsc);
echo "<br><b>Sorted by Names (A-Z):</b><br>";
foreach ($nameAsc as $name => $score) {
    echo "$name => $score<br>";
}

// 11. Sort students by name (Z-A)
$nameDesc = $students;
krsort($nameDesc);
echo "<br><b>Sorted by Names (Z-A):</b><br>";
foreach ($nameDesc as $name => $score) {
    echo "$name => $score<br>";
}

// 12. Merge with newStudents using array_merge and array_merge_recursive
$newStudents = [
    "Frank" => 75,
    "Grace" => 88
];

// array_merge (overwrites same keys)
$merged = array_merge($students, $newStudents);
echo "<br><b>Merged using array_merge():</b><br>";
print_r($merged);

// array_merge_recursive (combines values with same keys into arrays)
$mergedRecursive = array_merge_recursive($students, $newStudents);
echo "<br><b>Merged using array_merge_recursive():</b><br>";
print_r($mergedRecursive);

/*
  🔍 Explanation:
  - `array_merge` will overwrite any duplicate keys.
  - `array_merge_recursive` will merge values with same keys into arrays instead of overwriting.
*/

// 13. Extract first 3 students using array_slice
$firstThree = array_slice($students, 0, 3, false);
echo "<br><b>First 3 students (original array):</b><br>";
print_r($firstThree);

?>

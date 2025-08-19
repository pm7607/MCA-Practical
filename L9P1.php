<!-- Create a PHP script that performs the following tasks using a numeric array of student scores (derived from the previous associative array):
$scores = [85, 78, 92, 67, 90];
- Randomly shuffle the array and display the shuffled scores.
- Add a new score of 88 to the end of the array.
- Remove the last score from the array.
- Remove the 􏰀rst score from the array.
- Add a new score of 95 to the beginning of the array.
- Display the total number of scores in the current array.
- Check and display whether the score 90 exist in the array. - Calculate and display the sum and product of all scores.
- Find and display the minimum and maximum scores. - Sort the array in ascending order and display it.
- Sort the array in descending order and display it.
- Shuffle the array again and display it.
- Add two new scores (95 and 67) to the array.
- Remove any duplicate scores and display the unique scores.
- Display the array in reverse order.
- Merge the array with another array [73, 88] and display the merged array.
- Find and display the scores that exist in the merged array but not in the original array. -->

<?php
// Initial scores
$scores = [85, 78, 92, 67, 90];
echo "Original Scores: ";
print_r($scores);

// 1. Shuffle the array
shuffle($scores);
echo "Shuffled Scores: ";
print_r($scores);

// 2. Add a new score of 88 to the end
$scores[] = 88;
echo "After adding 88 to the end: ";
print_r($scores);

// 3. Remove the last score
array_pop($scores);
echo "After removing last score: ";
print_r($scores);

// 4. Remove the first score
array_shift($scores);
echo "After removing first score: ";
print_r($scores);

// 5. Add 95 to the beginning
array_unshift($scores, 95);
echo "After adding 95 at the beginning: ";
print_r($scores);

// 6. Total number of scores
echo "Total scores: " . count($scores) . "<br>";

// 7. Check if 90 exists
if (in_array(90, $scores)) {
    echo "Score 90 exists in the array.<br>";
} else {
    echo "Score 90 does not exist in the array.<br>";
}

// 8. Sum and product of all scores
echo "Sum: " . array_sum($scores) . "<br>";
echo "Product: " . array_product($scores) . "<br>";

// 9. Minimum and Maximum
echo "Min Score: " . min($scores) . "<br>";
echo "Max Score: " . max($scores) . "<br>";

// 10. Sort in ascending order
$asc = $scores;
sort($asc);
echo "Ascending Order: ";
print_r($asc);

// 11. Sort in descending order
$desc = $scores;
rsort($desc);
echo "Descending Order: ";
print_r($desc);

// 12. Shuffle again
shuffle($scores);
echo "Reshuffled Scores: ";
print_r($scores);

// 13. Add 95 and 67
$scores[] = 95;
$scores[] = 67;
echo "After adding 95 and 67: ";
print_r($scores);

// 14. Remove duplicates
$uniqueScores = array_unique($scores);
echo "Unique Scores: ";
print_r($uniqueScores);

// 15. Reverse the array
$reversed = array_reverse($scores);
echo "Reversed Array: ";
print_r($reversed);

// 16. Merge with [73, 88]
$merged = array_merge($scores, [73, 88]);
echo "Merged Array: ";
print_r($merged);

// 17. Find scores in merged but not in original
$diff = array_diff($merged, $uniqueScores);
echo "Scores in merged but not in original: ";
print_r(array_values($diff));
?>

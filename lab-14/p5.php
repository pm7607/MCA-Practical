<?php
// function countFileLines($filename) {
//     if (!file_exists($filename)) {
//         echo "File does not exist.";
//         return;
//     }

//     $file = fopen($filename, "r");
//     $lineCount = 0;

//     while (!feof($file)) {
//         $line = fgets($file);
//         if ($line !== false) {
//             $lineCount++;
//         }
//     }

//     fclose($file);
//     echo "Total number of lines: $lineCount";
// }

// countFileLines("example.txt");

$filename = "example.txt";

if (file_exists($filename)) {
    $lines = file($filename); 
    $lineCount = count($lines);
    echo "Number of lines in file: $lineCount";
} else {
    echo "File not found.";
}

?>

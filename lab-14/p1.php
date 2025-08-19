<?php
function checkFileExists($filePath) {
    if (file_exists($filePath)) {
        echo "The file '$filePath' exists.";
    } else {
        echo "The file '$filePath' does not exist.";
    }
}

// Example usage
checkFileExists("example.txt");
?>


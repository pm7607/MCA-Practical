<!DOCTYPE html>
<html>
<head><title>Read Text File</title></head>
<body>
    <h2>File Content:</h2>
    <?php
    $file = "example.txt";

    if (file_exists($file)) {
        $content = file_get_contents($file);
        echo nl2br($content);
    } else {
        echo "File does not exist.";
    }
    ?>
</body>
</html>


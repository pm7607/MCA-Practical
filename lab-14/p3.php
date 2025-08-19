<!DOCTYPE html>
<html>
<head><title>Write to File</title></head>
<body>
    <?php
    $file = "output.txt";
    $data = "Hello, this is some sample output written to the file.\n";
    file_put_contents($file, $data, FILE_APPEND);

    echo "<h3>Data written to $file:</h3>";
    echo nl2br(file_get_contents($file));
    ?>
</body>
</html>


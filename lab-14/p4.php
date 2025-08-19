<!DOCTYPE html>
<html>
<head><title>Delete File</title></head>
<body>
    <?php
    $file = "output.txt";

    if (file_exists($file)) {
        unlink($file);
        echo "File '$file' has been deleted.";
    } else {
        echo "File does not exist.";
    }
    ?>
</body>
</html>

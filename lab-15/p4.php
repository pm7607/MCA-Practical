<!DOCTYPE html>
<html>
<head><title>Multiple File Upload</title></head>
<body>
    <h2>Upload Multiple Files</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple required>
        <input type="submit" name="uploadBtn" value="Upload All">
    </form>

    <?php
    if (isset($_POST['uploadBtn'])) {
        $uploadDir = "uploads/";
        foreach ($_FILES['files']['tmp_name'] as $key => $tmpName) {
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetPath = $uploadDir . $fileName;
            if (move_uploaded_file($tmpName, $targetPath)) {
                echo "Uploaded: $fileName<br>";
            } else {
                echo "Failed to upload: $fileName<br>";
            }
        }
    }
    ?>
</body>
</html>

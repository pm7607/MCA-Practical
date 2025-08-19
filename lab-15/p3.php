<!DOCTYPE html>
<html>
<head><title>Image Upload</title></head>
<body>
    <h2>Upload Image (.jpg/.jpeg/.png, Max 1MB)</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="submit" name="submit" value="Upload">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['image'];
        $allowed = ['jpg', 'jpeg', 'png'];
        $maxSize = 1048576; // 1 MB =1048576 bytes

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed)) {
            echo "Only JPG, JPEG, and PNG files are allowed.";
        } elseif ($file['size'] > $maxSize) {
            echo "File is too large. Max size is 1MB.";
        } elseif (move_uploaded_file($file['tmp_name'], "uploads/" . basename($file['name']))) {
            echo "Image uploaded successfully.";
        } else {
            echo "Upload failed.";
        }
    }
    ?>
</body>
</html>

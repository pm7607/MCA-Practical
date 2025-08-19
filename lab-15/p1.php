<!DOCTYPE html>
<html>
<head><title>File Upload</title></head>
<body>
    <h2>Upload a File</h2>
    <form method="POST" enctype="multipart/form-data">
        Select file: <input type="file" name="uploadedFile" required>
        <input type="submit" name="uploadBtn" value="Upload">
    </form>

    <?php
    if (isset($_POST['uploadBtn'])) {
        $targetDir = "uploads/"; 
        $targetFile = $targetDir . basename($_FILES["uploadedFile"]["name"]);
        if (move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully to <b>$targetFile</b>";   
        } else {
            echo "Error uploading the file.";
        }
    }
    ?>
</body>
</html>

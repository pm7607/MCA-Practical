<!DOCTYPE html>
<html>
<head><title>Profile Picture</title></head>
<body>
    <h2>Change Profile Picture</h2>
    <?php
    $profilePic = "profile_pics/default.png"; 
    if (isset($_POST['upload'])) {
        $file = $_FILES['profilePic'];
        $targetDir = "profile_pics/";
        $fileName = "user_" . time() . "_" . basename($file["name"]);
        $targetFile = $targetDir . $fileName;

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            $profilePic = $targetFile;
            echo "<p>Profile picture updated!</p>";
        } else {
            echo "<p>Failed to upload image.</p>";
        }
    }
    ?>

    <img src="<?= htmlspecialchars($profilePic) ?>" alt="Profile Picture" width="150"><br><br>
    
    <form method="POST" enctype="multipart/form-data">
        Select new profile picture: 
        <input type="file" name="profilePic" required>
        <input type="submit" name="upload" value="Change Picture">
    </form>
</body>
</html>

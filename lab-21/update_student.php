<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT name, email, age FROM students WHERE id=?");
    $sql->bind_param("i", $id);
    $sql->execute();
    $sql->bind_result($name, $email, $age);
    $sql->fetch();
    $sql->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Student</title>
</head>
<body>
    <h2>Update Student</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>
        Age: <input type="number" name="age" value="<?php echo $age; ?>" required><br><br>
        <input type="submit" name="update" value="Update Student">
    </form>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $sql = $conn->prepare("UPDATE students SET name=?, email=?, age=? WHERE id=?");
    $sql->bind_param("ssii", $newName, $newEmail, $newAge, $id);

    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newAge = $_POST['age'];

    if ($sql->execute()) {
         echo "<script>
                    alert('Student updated successfully!');
                    window.location.href = 'index.php';
                  </script>";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
    $conn->close();
}
?>

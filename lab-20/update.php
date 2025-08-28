<?php include "db.php"; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Edit Student</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br><br>
    Age: <input type="number" name="age" value="<?php echo $row['age']; ?>"><br><br>
    <input type="submit" name="update" value="Update">
</form>

<?php
if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $age   = $_POST['age'];

    $sql = "UPDATE students SET name='$name', email='$email', age='$age' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Student updated successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

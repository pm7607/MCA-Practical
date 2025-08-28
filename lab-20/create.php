<?php include "db.php"; ?>

<h2>Add Student</h2>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Age: <input type="number" name="age"><br><br>
    <input type="submit" name="save" value="Save">
</form>

<?php
if (isset($_POST['save'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $age   = $_POST['age'];

    $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
    if (mysqli_query($conn, $sql)) {
        echo "Student added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

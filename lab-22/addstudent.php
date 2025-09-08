<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
<h2>Add Student</h2>
<form action="addstudent.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Age: <input type="number" name="age" required><br><br>
    Grade: <input type="text" name="grade" required><br><br>
    <input type="submit" name="submit" value="Add Student">
</form>
<br>
<a href="viewstudent.php">View Students</a>

<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    $sql = "CALL AddStudent('$name', $age, '$grade')";
    if($mysqli->query($sql)) {
        // echo "<p style='color:green'>Student added successfully!</p>";
        header("Location: viewstudent.php");
        exit();
    } else {
        echo "Error: " . $mysqli->error;
    }
}
$mysqli->close();
?>
</body>
</html>

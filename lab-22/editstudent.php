<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];
$result = $mysqli->query("CALL GetStudentById($id)");
$student = $result->fetch_assoc();
$mysqli->next_result(); 
?>

<h2>Edit Student</h2>
<form action="editstudent.php?id=<?= $id ?>" method="post">
    Name: <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>
    Age: <input type="number" name="age" value="<?= $student['age'] ?>" required><br><br>
    Grade: <input type="text" name="grade" value="<?= $student['grade'] ?>" required><br><br>
    <input type="submit" name="update" value="Update Student">
</form>
<br>
<a href="viewstudent.php">Back to List</a>

<?php
if(isset($_POST['update'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $grade = $_POST['grade'];

    $sql = "CALL UpdateStudent($id, '$name', $age, '$grade')";
    if($mysqli->query($sql)) {
        $mysqli->next_result(); 
        // echo "<p style='color:green'>Student updated successfully!</p>";
        header("Location: viewstudent.php");
        exit();
    } else {
        echo "Error: " . $mysqli->error;
    }
}
$mysqli->close();
?>

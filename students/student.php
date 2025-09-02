<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


$conn = new mysqli("localhost", "root", "", "collage");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CREATE
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $conn->query("INSERT INTO registration (name, email, course) VALUES ('$name','$email','$course')");
    header("Location: student.php");
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM registration WHERE id=$id");
    header("Location: student.php");
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $conn->query("UPDATE registration SET name='$name', email='$email', course='$course' WHERE id=$id");
    header("Location: student.php");
}

// EDIT – fetch data to prefill form
$editData = null;
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $conn->query("SELECT * FROM registration WHERE id=$id");
    $editData = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration CRUD</title>
</head>
<body>
    <h2>Student Registration</h2>
    <form method="POST">
        <input type="hidden" name="id" value="<?php echo $editData ? $editData['id'] : ''; ?>">
        <input type="text" name="name" placeholder="Name" required 
               value="<?php echo $editData ? $editData['name'] : ''; ?>">
        <input type="email" name="email" placeholder="Email" required 
               value="<?php echo $editData ? $editData['email'] : ''; ?>">
        <input type="text" name="course" placeholder="Course" required 
               value="<?php echo $editData ? $editData['course'] : ''; ?>">
        <button type="submit" name="add">Add</button>
        <button type="submit" name="update">Update</button>
    </form>

    <h3>Student List</h3>
    <table border="1" cellpadding="10">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Course</th><th>Action</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM registration");
        while ($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['name']; ?></td>
            <td><?= $row['email']; ?></td>
            <td><?= $row['course']; ?></td>
            <td>
                <a href="student.php?delete=<?= $row['id']; ?>">Delete</a> |
                <a href="student.php?edit=<?= $row['id']; ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

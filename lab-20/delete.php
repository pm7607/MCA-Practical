<?php include "db.php"; ?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Student deleted successfully.";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
<a href="index.php">Back to List</a>

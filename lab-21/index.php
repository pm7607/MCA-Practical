<?php
include "db.php";

$sql = $conn->prepare("SELECT id, name, email, age FROM students");
$sql->execute();
$result = $sql->get_result();

echo "<h2>Student List</h2><a href='add_student.php'>Add Student</a>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['age']}</td>
            <td>
                <a href='update_student.php?id={$row['id']}'>Edit</a> | 
                <a href='delete_student.php?id={$row['id']}'>Delete</a>
            </td>
          </tr>";
}
echo "</table>";

$sql->close();
$conn->close();
?>

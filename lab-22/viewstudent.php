<?php include 'config.php'; ?>

<h2>Students List</h2>
<a href="addstudent.php">Add New Student</a><br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Grade</th>
    <th>Actions</th>
</tr>

<?php
$result = $mysqli->query("CALL GetStudents()");
while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['age']."</td>
        <td>".$row['grade']."</td>
        <td>
            <a href='editstudent.php?id=".$row['id']."'>Edit</a> | 
            <a href='deletestudent.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?')\">Delete</a>
        </td>
    </tr>";
}
$mysqli->close();
?>
</table>
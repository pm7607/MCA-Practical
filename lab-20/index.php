<?php include "db.php"; ?>

<h2>All Students</h2>
<a href="create.php">Add New Student</a>
<br><br>

<table border="1" bordercollapse="collapse" cellpadding="5">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Age</th><th>Actions</th>
    </tr>

<?php
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['age']."</td>
        <td>
            <a href='update.php?id=".$row['id']."'>Edit</a> | |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
        </td>
    </tr>";
}
?>
</table>

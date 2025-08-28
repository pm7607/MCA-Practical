<?php
session_start();
include "config.php";

// Check login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// CREATE
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $sql = "INSERT INTO books (title, author, year) VALUES ('$title', '$author', '$year')";
    mysqli_query($conn, $sql);
}

// DELETE
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM books WHERE id=$id";
    mysqli_query($conn, $sql);
}

// UPDATE
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    $sql = "UPDATE books SET title='$title', author='$author', year='$year' WHERE id=$id";
    mysqli_query($conn, $sql);
}

// READ
$result = mysqli_query($conn, "SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
<title>Books CRUD</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a></h2>
<hr>

<!-- Add Book Form -->
<h3>Add Book</h3>
<form method="POST">
    Title: <input type="text" name="title" required><br><br>
    Author: <input type="text" name="author" required><br><br>
    Year: <input type="number" name="year" required><br><br>
    <input type="submit" name="add" value="Add Book">
</form>

<hr>
<h3>Book List</h3>
<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Year</th>
    <th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['year']; ?></td>
    <td>
        <!-- Edit Form -->
        <form method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="title" value="<?php echo $row['title']; ?>">
            <input type="text" name="author" value="<?php echo $row['author']; ?>">
            <input type="number" name="year" value="<?php echo $row['year']; ?>">
            <input type="submit" name="update" value="Update">
        </form>
        <!-- Delete Link -->
        <a href="books.php?delete=<?php echo $row['id']; ?>" onclick="return confirm('Delete this book?')">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</body>
</html>

<?php
session_start();
include "config.php";

// Check login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// ADD CATEGORY
if (isset($_POST['add_category'])) {
    $cat_name = $_POST['cat_name'];
    if (!empty($cat_name)) {
        $sql = "INSERT INTO categories (name) VALUES ('$cat_name')";
        mysqli_query($conn, $sql);
    }
}

// CREATE BOOK
if (isset($_POST['add'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $category_id = $_POST['category_id'];

    $sql = "INSERT INTO books (title, author, year, category_id) 
            VALUES ('$title', '$author', '$year', '$category_id')";
    mysqli_query($conn, $sql);
}

// DELETE BOOK
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM books WHERE id=$id";
    mysqli_query($conn, $sql);
}

// UPDATE BOOK
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $year = $_POST['year'];
    $category_id = $_POST['category_id'];

    $sql = "UPDATE books 
            SET title='$title', author='$author', year='$year', category_id='$category_id' 
            WHERE id=$id";
    mysqli_query($conn, $sql);
}

// READ Books with Category Join
$result = mysqli_query($conn, 
    "SELECT books.*, categories.name AS category_name 
     FROM books 
     LEFT JOIN categories ON books.category_id = categories.id"
);

// Fetch all categories once
//sql = "SELECT * FROM categories"
$categories = mysqli_query($conn, "SELECT * FROM categories");
$categoryList = [];
while ($cat = mysqli_fetch_assoc($categories)) {
    $categoryList[] = $cat;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Books CRUD</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?> | <a href="logout.php">Logout</a></h2>
<hr>

<!-- Add Category Form -->
<h3>Add Category</h3>
<form method="POST">
    Category Name: <input type="text" name="cat_name" required>
    <input type="submit" name="add_category" value="Add Category">
</form>

<hr>

<!-- Add Book Form -->
<h3>Add Book</h3>
<form method="POST">
    Title: <input type="text" name="title" required><br><br>
    Author: <input type="text" name="author" required><br><br>
    Year: <input type="number" name="year" required><br><br>
    Category: 
    <select name="category_id" required>
        <option value="">Select Category</option>
        <?php foreach ($categoryList as $cat) { ?>
            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['name']; ?></option>
        <?php } ?>
    </select><br><br>
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
    <th>Category</th>
    <th>Actions</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['year']; ?></td>
    <td><?php echo $row['category_name']; ?></td>
    <td>
        <!-- Edit Form -->
        <form method="POST" style="display:inline-block;">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="title" value="<?php echo $row['title']; ?>">
            <input type="text" name="author" value="<?php echo $row['author']; ?>">
            <input type="number" name="year" value="<?php echo $row['year']; ?>">

            <select name="category_id">
                <?php foreach ($categoryList as $cat) { 
                    $selected = ($cat['id'] == $row['category_id']) ? "selected" : "";
                ?>
                    <option value="<?php echo $cat['id']; ?>" <?php echo $selected; ?>>
                        <?php echo $cat['name']; ?>
                    </option>
                <?php } ?>
            </select>

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

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>
    <h2>Add Student</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        <input type="submit" name="submit" value="Add Student">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        include "db.php";

        $sql = $conn->prepare("INSERT INTO students (name, email, age) VALUES (?, ?, ?)");
        $sql->bind_param("ssi", $name, $email, $age);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        if ($sql->execute()) {
           echo "<script>
                    alert('Student added successfully!');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "Error: " . $sql->error;
        }
        $sql->close();
        $conn->close();
    }
    ?>
</body>
</html>

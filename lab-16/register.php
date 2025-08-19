<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>

    <?php
    $name = $email = $age = $password = "";
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $age = trim($_POST["age"]);
        $password = $_POST["password"];

        if( empty($name) || !preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errors[] = "Name can only contain letters and spaces.";
        }

        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif(!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)){
            $errors[] = "Invalid email format.";
        }

        if (empty($age)) {
            $errors[] = "Age is required.";
        } elseif (!is_numeric($age) || $age < 10 || $age > 100) {
            $errors[] = "Age must be a number between 10 and 100.";
        }

        if (empty($password)) {
            $errors[] = "Password is required.";
        } elseif (strlen($password) < 6) {
            $errors[] = "Password must be at least 6 characters.";
        }

        // Display result
        if (empty($errors)) {
            echo "<h3>Registration Successful!</h3>";
            echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>";
        } else {
            echo "<ul style='color: red;'>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    }
    ?>

    <form method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" ><br><br>

        <label>Email:</label><br>
        <input type="text" name="email" ><br><br>

        <label>Age:</label><br>
        <input type="text" name="age" ><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>

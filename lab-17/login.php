<?php
session_start();
include "config.php";

// Check if user is already logged in via cookie
if (isset($_COOKIE['username']) && !isset($_SESSION['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
    header("Location: welcome.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        
        // Set cookie if "Remember Me" is checked
        if (isset($_POST['remember'])) {
            // Cookie will expire in 30 days
            setcookie('username', $username, time() + (30 * 24 * 60 * 60), '/');
        }
        
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid Username or Password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
</head>
<body>
<h2>Login</h2>
<form method="POST">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="checkbox" name="remember" id="remember">
    <label for="remember">Remember Me</label><br><br>
    <input type="submit" value="Login" >
</form>
</body>
</html>

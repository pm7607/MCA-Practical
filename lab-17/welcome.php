<?php
session_start();

// Check if user is logged in via session or cookie
if (!isset($_SESSION['username'])) {
    if (isset($_COOKIE['username'])) {
        // If cookie exists but no session, create session from cookie
        $_SESSION['username'] = $_COOKIE['username'];
    } else {
        // No session and no cookie, redirect to login
        header("Location: login.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>
</body>
</html>

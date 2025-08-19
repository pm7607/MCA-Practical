<?php
session_start();
session_destroy();

// Clear the remember me cookie
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/'); // Set cookie to expire in the past
}

header("Location: login.php");
exit();
?>

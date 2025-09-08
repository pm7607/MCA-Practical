<?php
include 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "CALL DeleteStudent($id)";
    if($mysqli->query($sql)) {
        header("Location: viewstudent.php");
        exit;
    } else {
        echo "Error: " . $mysqli->error;
    }
}

$mysqli->close();
?>

<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $conn->prepare("DELETE FROM students WHERE id=?");
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        echo "<script>
                    alert('Student deleted successfully!');
                    window.location.href = 'index.php';
                  </script>";
    } else {
        echo "Error: " . $sql->error;
    }
    $sql->close();
    $conn->close();
}
?>

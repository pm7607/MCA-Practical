<?php

if(isset($_POST['submit'])) {
    $name_p = $_POST['name'];
    $email_p = $_POST['email'];
    $mobile_p = $_POST['number'];
    $gender_p = $_POST['gender'];
    echo "<h2>data fetch using post method :</h2> <br>";
    echo "Name: $name_p <br>";
    echo "Email: $email_p <br>";        
    echo "Mobile: $mobile_p <br>";
    echo "Gender: $gender_p <br>";
}

if(isset($_GET['submit'])){
    $name_p = $_GET['name'];
    $email_p = $_GET['email'];
    $mobile_p = $_GET['number'];
    $gender_p = $_GET['gender'];
    echo "<h2>data fetch using get method :</h2> <br>";
    echo "Name: $name_p <br>";
    echo "Email: $email_p <br>";        
    echo "Mobile: $mobile_p <br>";
    echo "Gender: $gender_p <br>";
}


if(isset($_REQUEST['submit'])){
    $name_p = $_REQUEST['name'];
    $email_p = $_REQUEST['email'];
    $mobile_p = $_REQUEST['number'];
    $gender_p = $_REQUEST['gender'];
    echo "<h2>data fetch using request method :</h2> <br>";
    echo "Name: $name_p <br>";
    echo "Email: $email_p <br>";        
    echo "Mobile: $mobile_p <br>";
    echo "Gender: $gender_p <br>";
}
?>

<?php

$email = $_POST['UserEmail'];
$pass = $_POST['UserPass'];

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Youtube_Simulator";
$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $GLOBALS['conn']->connect_error);
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sql = "SELECT * FROM Users WHERE Email= '$email' AND Password='$pass'";
    $result = $GLOBALS['conn']->query($sql);
    if (mysqli_num_rows($result) == 0) {
        echo "Username or Password Invalid";
    } else {
        header("Location:user.php?username=" . $email . "&password=" . $pass);
    }
}





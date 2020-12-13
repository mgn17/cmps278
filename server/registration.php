<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

$email = $_POST['rEmail'];
$pass = $_POST['rPassword'];
$pass2= $_POST['rPassword2'];
$age = $_POST['Age'];
$FirstName= $_POST['fName'];
$LastName= $_POST["lName"];
$Address = $_POST["Address"];

echo $email;
echo '<br>';
echo $pass;
echo '<br>';
echo $pass2;
echo '<br>';
echo $age;
echo '<br>';
echo $FirstName;
echo '<br>';
echo $LastName;
echo '<br>';
echo $Address;
echo '<br>';


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Youtube_Simulator";

$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $GLOBALS['conn']->connect_error);
}
if ($pass == $pass2){
    $sql = "SELECT * FROM Users WHERE Email='$email'";
    $result = $GLOBALS['conn']->query($sql);
    if (mysqli_num_rows($result) != 0) {
        echo "Email already in Use";
    } else {
        $sql= "INSERT INTO Users (Email, Password, Age, First_Name, Last_Name, Address) VALUES ('$email', '$pass', $age, '$FirstName', '$LastName', '$Address')";
        $result = $GLOBALS['conn']->query($sql);
        if ($result){
            echo "User added";
        }else{
            echo "Insert Failed";
        }
    }

}else{
    echo "Passwords do not match";
}






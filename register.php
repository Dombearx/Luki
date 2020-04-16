<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



$login = $_POST['login'];
$password = $_POST['password'];
$password_repeat = $_POST['password_repeat'];

echo $login." ".$password." ".$password_repeat;


if($password == $password_repeat){
    $sql = "INSERT INTO users VALUES $login, $password";

    $result = @$conn->query($sql);

    echo "Result:".$result;
}else {
    echo "hasła nie są identyczne!";
}


$conn->close(); 

?> 

    

<?php

$database='aayush';
$host ='localhost';
$username = 'admin';
$password = 'admin';

$conn = mysqli_connect($host, $username, $password, $database);

if($conn->connect_error){
    echo"connection failed";
}
else{
    echo 'connected sussesful';
}


?>
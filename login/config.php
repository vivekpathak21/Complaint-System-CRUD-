<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "users";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry connection failed: "+ mysqli_connect_error());
}

// echo "connection successful";


?>
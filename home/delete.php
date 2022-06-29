<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "msg";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry connection failed: "+ mysqli_connect_error());
}

if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $sql = "delete from `msg` where SerialNo=$id";
    $result =  mysqli_query($conn,$sql);
    if($result)
    {
        // echo "deleted successful";
        header('location:complaintus.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}



?>
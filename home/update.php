<?php
//    INSERT INTO `msg` (`SerialNo`, `Title`, `Description`, `Tstamp`) VALUES ('1', 'First complaint', 'this is the first complaint .', current_timestamp());     
        // connect to database
$insert = false;     
$servername = "localhost";
$username = "root";
$password = "";
$database = "msg";
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("sorry connection failed: "+ mysqli_connect_error());
}

// echo "connection successful";
$id = $_GET['updateid'];

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $title = $_POST["title"];
    $description = $_POST["description"];

   // $sql = " UPDATE `msg` (`title` , `description`) VALUES('$title','$description') WHERE SerialNo = `$id`";

   $sql = "UPDATE `msg` SET `title`='$title',`description`='$description' WHERE `SerialNo`=$id";
   $result = mysqli_query($conn,$sql);


    if($result)
    {
        // $insert = true;
        header('location:complaintus.php');

        
    }

    
}

// session_start();
// if($_SESSION['Submit'] == $_POST['Submit'] && isset($_SESSION['Submit']) )
// {

// }
// else
// {
//     $_SESSION['Submit'] = $_POST['Submit'];
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title> Hygiene Complaint System </title>
  </head>
  <body>
   
        
    <?php 
            if($insert)
            {
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your complaint have been updated.
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                </button>
              </div>";
            }
    ?>

    

<div class="container my-5">
    <h1> Edit Message </h1>
<form action="" method = "post">
  <div class="form-group">
    <label for="title"> Subject </label>
    <input type="text" class="form-control" id = "title" name = "title" placeholder="Enter Subject">

  </div>
  
  <div class="form-group">
    <label for="description">Complaint Description </label>
    <textarea class="form-control" id="description" name = "description" rows="6" placeholder ="Enter Description With Location"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="Submit">Update</button>
</form>
</div>
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

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


if($_SERVER['REQUEST_METHOD'] == 'POST')
{   
    echo "hello";
    $name = $_POST["name"];
    $username = $_POST["username"];
    $pass = $_POST["password"];
    $confirm = $_POST["confirm"];
    $addr = $_POST["add"];
    $phone = $_POST["phone"];
    $state = $_POST["state"];
    $city = $_POST["city"];
    echo "hello";
    
    $sql = " INSERT INTO `users`(`fullname`, `username`, `password`, `confirm`, `address`, `phone`, `state`, `city`) VALUES ('$name','$username','$pass','$confirm','$addr','$phone','$state','$city')";
    echo "hello";
    
    $result = mysqli_query($conn,$sql);
    

    if($result)
    {
        $insert = true;
        header('location:../home/home.php');

    }

    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint system</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/register2_style.css">
</head>
<body>
    <section class="register">

    <div class="container1">
    <nav class="navbar">
        <div class="container">
            <h1 class = "nav-head lg-heading"> Community Hygiene Service</h1>
            <ul class="nav-items">
                <li class="navitem md-heading"><a href="login.php">Login</a></li>
                <li class="navitem md-heading"><a href="../home/aboutus.php">About</a></li>
                <li class="navitem md-heading"><a href="../home/contactus.php">Contact</a></li>

            </ul>
        </div>
        </nav>
    </div>
    <div class="container2">
    <form action="" class = "form" method="post">
             <label for="name" class = "md-heading">Full Name</label>
            <input id ="name"class="md-width"type="text" placeholder="Enter Name"name="name" required><br><br>
            <label for="username" class = "md-heading">Username</label>
            <input id="username"type="text" placeholder="Enter Username"name="username" required><br><br>
            <label for="password" class="md-heading">Password</label>
            <input id="password" type="password" placeholder="Enter Password" name="password" required><br><br>
            <label for="confirm" class="md-heading">Confirm   Password</label>
            <input id="confirm"type="password" placeholder="Enter Password" name="confirm" required><br><br>
            <label for="add" class ="md-heading">Address</label>
            <input class="lg-width"type="text" name="add" id="add" placeholder = "Address"><br><br>
            <label for="phone" class="md-heading">Phone no.</label>
            <input id="phone" type="tel" placeholder="Phone no" name="phone" required><br><br>
            <label for="state" class="md-heading">State</label>
            <input id="state"name="state"class="sm-width"type="text" placeholder="State"><br><br> 
            <label for="city" class="md-heading">City</label>
            <input id="city" name="city"class="sm-width"type="text" placeholder="City"><br><br>
            
            <button type="submit" style="margin-left:45%" name="Submit">Submit</button>
            
            <!-- <a href="#" class=" btn-login sm-heading text-red"> Enter </a><br><br> -->

          </div>  
          <br>
        
        </form>

    </div>

    </section>
    <footer class="footer ">
            <div class="social">
                    <i class="fab fa-facebook fa-4x"></i> 
                    <i class="fab fa-twitter fa-4x"></i>
                    <i class="fab fa-instagram fa-4x"></i>
            </div>
            <p> &copy; 2020,All Right Reserved </p>
            
    </footer>
</body>
</html>
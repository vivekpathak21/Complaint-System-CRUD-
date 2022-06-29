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
        if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];

        $sql = "Select * from users where username = '$user' ";
        $result = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($result);

        if($count == 1)
        {
            header('location: ../home/home.php');
        }
        else
        {
            // echo "Login Failed. Invalid Credentials";
            header('location: login.php');

        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Community Hygiene Service </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/login_style2.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
        <div class="container">
            <h1 class = "nav-head lg-heading" style="background : #aaa; margin-left : 25%"> Community Hygiene Service </h1>
            <ul class="nav-items">
                <li class="navitem md-heading"><a href="register.php" style="background : #aaa;">Register</a></li>
                <li class="navitem md-heading"><a href="../home/aboutus.php"style="background : #aaa;">About</a></li>
                <li class="navitem md-heading"><a href="../home/contactus.php"style="background : #aaa;">Contact</a></li>

            </ul>
        </div>
        </nav>
        <div class="header-content">
            <!-- <h1 > Hygiene Complaint Service</h1> -->
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium vitae praesentium rem, delectus, quo sapiente quibusdam, aut sequi id voluptas nihil doloremque error est. Et, ullam. Accusantium ipsam beatae in!</p> -->
            
        </div>
        <div class="next-btn">

         <a href="#" class="btn btn-primary md-heading text-red"> >>> </a>

        </div>
</header>

    <section class = "sec-con">
        <div class="form-con">
        <form action="" method = "POST" class = "form">
            <label for="username" class = "md-heading">Username</label>
            <input type="text" id="username" placeholder="Enter Username"name="username" required><br><br>
            <label for="password" class="md-heading">Password</label>
            <input type="password" id="password"placeholder="Enter Password" name="password" required><br><br>
            <!-- <a href="#" class=" btn-login sm-heading text-red"> Enter </a><br><br> -->
            <input type="submit" name ="submit"id = "submit" style="margin-left:50%" value="submit"><br>
          <div class="check">
          <input type="checkbox" checked="checked">
          <label for="remeber"><h3>Remember me</h3></label>
          </div>  
          <br>
            forgot <a href="#">Password?</a>
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
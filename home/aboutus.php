<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
  width: 100%;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width:25% ;
  margin-bottom: 10px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 6px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color;black;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color:rgba(0, 0, 0, 0.2);
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>We Are From Sem 6 C.E Department B Batch Students</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <!-- <img src=""alt="meet" style="width:100%"> -->
      <div class="container">
        <!-- <h2>Meet Patel</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me.</p>
        <p>meet@gmail.com</p> -->
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <!-- <img src="/w3images/team2.jpg" alt="vivek" style="width:100%"> -->
      <div class="container">
        <h2>VIvek Pathak</h2>
        <p class="title">Enrollment - 190130107111</p>
        <p>CE sem-6 B2</p>
        <p>vivekpathak212002@gmail.com</p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <!-- <img src="/w3images/team3.jpg" alt="rajan" style="width:100%"> -->
      <div class="container">
        <h2>Rajan Patel</h2>
        <p class="title">Enrollment - 190130107102</p>
        <p>CE sem-6 B1</p>
        <p>rajan@gmail.com</p>
        
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <!-- <img src="/w3images/team3.jpg" alt="priyank" style="width:100%"> -->
      <div class="container">
        <!-- <h2>Priyank Shah</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me.</p> -->
        <!-- <p>priyank@gmail.com</p> -->
        
      </div>
    </div>
  </div>
  <a href="../login/login.php" style=" margin-left:45% ">Login</a> <a href="../home/contactus.php" style="margin-left:10px">Contact</a>

</div>
</body>
</html>

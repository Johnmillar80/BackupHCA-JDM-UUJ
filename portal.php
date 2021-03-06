<!--REFERENCE  Rehman, J. (2018). Simple User Registration & Login Script in PHP and MySQLi | All PHP Tricks. [online] All PHP Tricks - Web Development Tutorials and Demos. Available at: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ [Accessed 9 Apr. 2018]. -->

<?php
require('database.php');
include("verify.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Portal</title>
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

 <!-- Navigation -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Health-Chat Anonymous</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../categories.html">Live Chat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../information.html">Information</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contact.html">Contact Us</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="../LoginReg/login.php">Log In / Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--Jumbrotron Header-->

<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <h1>Health-Chat Annoymous</h1>
   <p>A safe service that's here for you</p> 
  </div>
</div>

<!--Portal Form-->

<div class="form">
<h3>Councillor Portal</h3>
<h3>Welcome to your Home.</h3>
<div class="row">
  <div class="col-sm-4"><div class="team">
  <img src="images/home.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="../index.html" target="_blank" >Home</a></p>
</div></div>

  <div class="col-sm-4"><div class="team">
  <img src="images/livechat.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="https://www.mylivechat.com/webconsole/" target="_blank" >Live Chat</a></p>
</div></div>

  <div class="col-sm-4"><div class="team">
  <img src="images/calendarportal.png" alt="Calendar" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="../calendar/index.php" target="_blank" >Calendar</a></p>
</div></div>
</div>

<!-- Second Tier Private Appointments-->

<h3>Private Appointments</h3>

<div class="row">
  <div class="col-sm-4"><div class="team">
  <img src="images/mental.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="../appointmentchat/ajax-chat.html" target="_blank" >Mental</a></p>
</div></div>

  <div class="col-sm-4"><div class="team">
  <img src="images/emotion.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="../appointmentchat/ajax-chat.html" target="_blank" >Emotional</a></p>
</div></div>

  <div class="col-sm-4"><div class="team">
  <img src="images/money.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="../appointmentchat/ajax-chat.html" target="_blank" >Financial</a></p>
</div></div>

<!--Third Tier Logout-->

 <div class="col-sm-4"><div class="team">
  <img style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a></a></p>
</div></div>

 <div class="col-sm-4"><div class="team">
  <img src="images/logout.png" alt="Boss" style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a href="logout.php">Logout</a></p>
</div></div>

 <div class="col-sm-4"><div class="team">
  <img style="width:100%" class="w3-circle w3-hover-opacity">
  <p><a></a></p>
</div></div>
</div>


</div>
 
</body>


<!--Set Footer per page -->

<footer>
<!--2nd jumbotron-->    
<div class="jumbotron-special">
<div class="container"> 
  <div class="hyperlink"> <!--footer links-->
    <a href="../index.html" class="hyperlink">Home</a>
    <a href="../categories.html" class="hyperlink">Live Chat</a>
    <a href="../information.html" class="hyperlink">Information</a>
    <a href="../about.html" class="hyperlink">About Us</a>
    <a href="../contact.html" class="hyperlink">Contact Us</a>
    <a href="../login.php" class="hyperlink">Login / Register</a>
    <div class="row"> <!--Social Media Icon Links-->
        <div class="col-sm-4"><img class="img-fluid" href="" src="images/FB.png" alt="Facebook" width="100" height="100" ></div>
        <div class="col-sm-4"><img class="img-fluid" href="" src="images/IG.png" alt="Instagram" width="100" height="100"></div>
        <div class="col-sm-4"><img class="img-fluid" href="" src="images/TW.png" alt="Twitter" width="100" height="100"></div>
    </div>
      </div>
</div>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src='https:////code.jquery.com/jquery-3.3.1.min.js'></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBzrtNq5XBtKNs7Im0vTOQ8Y6PJVkWEXQk&callback=myMap"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</footer>


</html>
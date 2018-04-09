<!--REFERENCE  Rehman, J. (2018). Simple User Registration & Login Script in PHP and MySQLi | All PHP Tricks. [online] All PHP Tricks - Web Development Tutorials and Demos. Available at: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ [Accessed 9 Apr. 2018]. -->

<?php

//Connects to Health Chat Anonymous table

$con = mysqli_connect("localhost","root","","health_chat_anonymous");

// Checks connection to the database

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
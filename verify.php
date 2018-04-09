<!--REFERENCE  Rehman, J. (2018). Simple User Registration & Login Script in PHP and MySQLi | All PHP Tricks. [online] All PHP Tricks - Web Development Tutorials and Demos. Available at: https://www.allphptricks.com/simple-user-registration-login-script-in-php-and-mysqli/ [Accessed 9 Apr. 2018]. -->

<?php
session_start();
if(!isset($_SESSION["username"])){
header("login.php");
exit(); }
?>
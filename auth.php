
<!--Authenticating the User Login-->


<?php
session_start();
if(!isset($_SESSION["username"])){
header("login.php");
exit(); }
?>
<?php
//connects to the HCA database
$con = mysqli_connect("localhost","root","","health_chat_anonymous");
// Checks connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
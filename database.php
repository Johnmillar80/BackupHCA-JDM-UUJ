<?php

//Connects to Health Chat Anonymous table

$con = mysqli_connect("localhost","root","","health_chat_anonymous");

// Checks connection to the database

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
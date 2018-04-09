<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirects user to Login Page
header("Location: login.php");
}
?>
<?php
session_start();
// Clears all previous sessions
if(session_destroy())
{
// Redirects user To the login page
header("Location: login.php");
}
?>
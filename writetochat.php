<!-- REFERENCE Rilling, F. and Rilling, F. (2018). Creating a web chat with PHP and MySQL | F-Rilling. [online] F-Rilling. Available at: https://f-rilling.com/creating-a-web-chat-with-php-and-mysql [Accessed 9 Apr. 2018].-->

<?php
require("connect.php");

//connect to database
$db = new mysqli($db_host,$db_user, $db_password, $db_name);
if ($db->connect_errno) {
    //if connection fails
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}


//get userinput from url
$username=substr($_GET["username"], 0, 32);
$text=substr($_GET["text"], 0, 128);
//escaping is extremely important to avoid injections!
$nameEscaped = htmlentities(mysqli_real_escape_string($db,$username)); //escape username and limit it to 32 chars
$textEscaped = htmlentities(mysqli_real_escape_string($db, $text)); //escape text and limit it to 128 chars



//create query and insert into chatroom table
$query="INSERT INTO chatroom (username, text) VALUES ('$nameEscaped', '$textEscaped')";
//execute query
if ($db->real_query($query)) {
    //If the query was successful
    echo "Wrote message to db";
}else{
    //If the query was NOT successful
    echo "An error occured";
    echo $db->errno;
}

$db->close();
?>

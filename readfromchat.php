<!-- REFERENCE Rilling, F. and Rilling, F. (2018). Creating a web chat with PHP and MySQL | F-Rilling. [online] F-Rilling. Available at: https://f-rilling.com/creating-a-web-chat-with-php-and-mysql [Accessed 9 Apr. 2018].-->

<?php
require("connect.php");

//connect to database
$db = new mysqli($db_host,$db_user, $db_password, $db_name); 
if ($db->connect_errno) {

	//if connection fails
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

//Selects from chatroom table
$query="SELECT * FROM chatroom ORDER BY id ASC";
//execute query
if ($db->real_query($query)) {
	//If the query was successful
	$res = $db->use_result();

    while ($row = $res->fetch_assoc()) {
        $username=$row["username"];
        $text=$row["text"];
        $time=date('G:i', strtotime($row["time"])); //outputs date as # #Hour#:#Minute#
        
        echo "<p>$time | $username: $text</p>\n";
    }
}else{
	//If the query was NOT successful
	echo "An error occured";
	echo $db->errno;
}

$db->close();
?>

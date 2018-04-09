<?php

/* Connection to the HCA database */

$dbOptions = array(
	'db_host' => 'localhost',
	'db_user' => 'root',
	'db_pass' => '',
	'db_name' => 'health_chat_anonymous'
);

/* configuration with linked files */


error_reporting(E_ALL ^ E_NOTICE);

require "DB.class.php";
require "Chat.class.php";
require "ChatBase.class.php";
require "ChatLine.class.php";
require "ChatUser.class.php";

session_name('webchat');
session_start();

if(get_magic_quotes_gpc()){
	
	// If magic quotes is enabled, strip the extra slashes
	array_walk_recursive($_GET,create_function('&$v,$k','$v = stripslashes($v);'));
	array_walk_recursive($_POST,create_function('&$v,$k','$v = stripslashes($v);'));
}

try{
	
	// Connects to the database
	DB::init($dbOptions);
	
	$response = array();
	
	// sorts the different sections of the chat
	
	switch($_GET['action']){
		
		case 'login':
			$response = Chat::login($_POST['name'],$_POST['email']);
		break;
		
		case 'checkLogged':
			$response = Chat::checkLogged();
		break;
		
		case 'logout':
			$response = Chat::logout();
		break;
		
		case 'submitChat':
			$response = Chat::submitChat($_POST['chatText']);
		break;
		
		case 'getUsers':
			$response = Chat::getUsers();
		break;
		
		case 'getChats':
			$response = Chat::getChats($_GET['lastID']);
		break;
		
		default:
			throw new Exception('Wrong action');
	}
	
	echo json_encode($response);
}
catch(Exception $e){
	die(json_encode(array('error' => $e->getMessage())));
}

?>
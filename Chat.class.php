<!-- REFERENCES - Tutorialzine. (2018). Making an AJAX Web Chat (Part 1) - PHP and MySQL. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-php-mysql [Accessed 9 Apr. 2018].
 Tutorialzine. (2018). Making an AJAX Web Chat (Part 2) - CSS and jQuery. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-css-jquery [Accessed 9 Apr. 2018]. -->

 <?php

/* This Chat class shows the public static methods, which are used in the ajax.php */

class Chat{
	
	public static function login($name,$email){
		if(!$name || !$email){
			throw new Exception('Fill in all the required fields.');
		}
		
		if(!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)){
			throw new Exception('Your email is invalid.');
		}
		
		// Prepares the gravatar hashing:

		$gravatar = md5(strtolower(trim($email)));
		
		$user = new ChatUser(array(
			'name'		=> $name,
			'gravatar'	=> $gravatar
		));
		
		// The save method returns a MySQLi object
		if($user->save()->affected_rows != 1){
			throw new Exception('This nick is in use.');
		}
		
		$_SESSION['user']	= array(
			'name'		=> $name,
			'gravatar'	=> $gravatar
		);
		
		return array(
			'status'	=> 1,
			'name'		=> $name,
			'gravatar'	=> Chat::gravatarFromHash($gravatar)
		);
	}
	
	public static function checkLogged(){
		$response = array('logged' => false);
			
		if($_SESSION['user']['name']){
			$response['logged'] = true;
			$response['loggedAs'] = array(
				'name'		=> $_SESSION['user']['name'],
				'gravatar'	=> Chat::gravatarFromHash($_SESSION['user']['gravatar'])
			);
		}
		
		return $response;
	}
	
	//Deletes chat once user logs out

	public static function logout(){
		DB::query("DELETE FROM webchat_users WHERE name = '".DB::esc($_SESSION['user']['name'])."'");
		
		$_SESSION = array();
		unset($_SESSION);

		return array('status' => 1);
	}
	
	public static function submitChat($chatText){
		if(!$_SESSION['user']){
			throw new Exception('You are not logged in');
		}
		
		if(!$chatText){
			throw new Exception('You haven\' entered a chat message.');
		}
	
		$chat = new ChatLine(array(
			'author'	=> $_SESSION['user']['name'],
			'gravatar'	=> $_SESSION['user']['gravatar'],
			'text'		=> $chatText
		));
	
		// The save method returns a MySQLi object
		$insertID = $chat->save()->insert_id;
	
		return array(
			'status'	=> 1,
			'insertID'	=> $insertID
		);
	}
	
	public static function getUsers(){
		if($_SESSION['user']['name']){
			$user = new ChatUser(array('name' => $_SESSION['user']['name']));
			$user->update();
		}
		
		// Deletes chats older than 8 minutes and users inactive for 59 seconds
		
		DB::query("DELETE FROM webchat_lines WHERE ts < SUBTIME(NOW(),'0:8:0')");
		DB::query("DELETE FROM webchat_users WHERE last_activity < SUBTIME(NOW(),'0:0:59')");
		
		$result = DB::query('SELECT * FROM webchat_users ORDER BY name ASC LIMIT 18');
		
		$users = array();
		while($user = $result->fetch_object()){
			$user->gravatar = Chat::gravatarFromHash($user->gravatar,30);
			$users[] = $user;
		}
	
		return array(
			'users' => $users,
			'total' => DB::query('SELECT COUNT(*) as cnt FROM webchat_users')->fetch_object()->cnt
		);
	}
	
	public static function getChats($lastID){
		$lastID = (int)$lastID;
	
		$result = DB::query('SELECT * FROM webchat_lines WHERE id > '.$lastID.' ORDER BY id ASC');
	
		$chats = array();
		while($chat = $result->fetch_object()){
			
			// Returns the time that the chat was created
			
			$chat->time = array(
				'hours'		=> gmdate('H',strtotime($chat->ts)),
				'minutes'	=> gmdate('i',strtotime($chat->ts))
			);
			
			$chat->gravatar = Chat::gravatarFromHash($chat->gravatar);
			
			$chats[] = $chat;
		}
	
		return array('chats' => $chats);
	}
	
	public static function gravatarFromHash($hash, $size=23){
		return 'http://www.gravatar.com/avatar/'.$hash.'?size='.$size.'&amp;default='.
				urlencode('http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?size='.$size);
	}
}


?>
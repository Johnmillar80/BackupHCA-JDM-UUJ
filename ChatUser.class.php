<!-- REFERENCES - Tutorialzine. (2018). Making an AJAX Web Chat (Part 1) - PHP and MySQL. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-php-mysql [Accessed 9 Apr. 2018].
 Tutorialzine. (2018). Making an AJAX Web Chat (Part 2) - CSS and jQuery. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-css-jquery [Accessed 9 Apr. 2018]. -->

 <?php

class ChatUser extends ChatBase{
	
	protected $name = '', $gravatar = '';
	
	public function save(){
		
		DB::query("
			INSERT INTO webchat_users (name, gravatar) /*Saves webchat users table*/
			VALUES (
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
		)");
		
		return DB::getMySQLiObject();
	}
	
	public function update(){
		DB::query("
			INSERT INTO webchat_users (name, gravatar) /*Updates webchat users table*/
			VALUES (
				'".DB::esc($this->name)."',
				'".DB::esc($this->gravatar)."'
			) ON DUPLICATE KEY UPDATE last_activity = NOW()");
	}
}

?>
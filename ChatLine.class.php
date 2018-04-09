<!-- REFERENCES - Tutorialzine. (2018). Making an AJAX Web Chat (Part 1) - PHP and MySQL. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-php-mysql [Accessed 9 Apr. 2018].
 Tutorialzine. (2018). Making an AJAX Web Chat (Part 2) - CSS and jQuery. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-css-jquery [Accessed 9 Apr. 2018]. -->

 <?php

/* This class is used for entries in the chat */

class ChatLine extends ChatBase{
	
	protected $text = '', $author = '', $gravatar = '';
	
	public function save(){
		DB::query("
			INSERT INTO webchat_lines (author, gravatar, text) /*Inserts into webchat table*/
			VALUES (
				'".DB::esc($this->author)."',
				'".DB::esc($this->gravatar)."',
				'".DB::esc($this->text)."'
		)");
		
		// Returns the MySQLi object of the DB class
		
		return DB::getMySQLiObject();
	}
}

?>
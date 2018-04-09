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
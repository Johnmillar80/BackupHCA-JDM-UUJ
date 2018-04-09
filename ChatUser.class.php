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
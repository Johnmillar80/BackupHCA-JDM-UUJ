<?php

/* This class is used by the ChatLine class and ChatUser class */

class ChatBase{

	// All chats use this constructor

	public function __construct(array $options){
		
		foreach($options as $k=>$v){
			if(isset($this->$k)){
				$this->$k = $v;
			}
		}
	}
}

?>
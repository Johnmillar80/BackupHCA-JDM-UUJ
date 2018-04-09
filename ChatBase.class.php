<!-- REFERENCES - Tutorialzine. (2018). Making an AJAX Web Chat (Part 1) - PHP and MySQL. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-php-mysql [Accessed 9 Apr. 2018].
 Tutorialzine. (2018). Making an AJAX Web Chat (Part 2) - CSS and jQuery. [online] Available at: https://tutorialzine.com/2010/10/ajax-web-chat-css-jquery [Accessed 9 Apr. 2018]. -->


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
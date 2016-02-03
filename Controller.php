<?php
class controller{
    public $current_view;
    public $user_input;
    function get_user_input(){
        return $this->user_input;
    }

	function user_input($input){        
        $this->current_view="GameScreen";
        if (isset($_POST['data'])){
            $this->user_input=json_decode($_POST['data'], true); 
            return;
         }
	}
    function get_view(){
        return $this->current_view;
    }
}

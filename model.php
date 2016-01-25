<?php

class model{
    public $type;
    public $data;
	function process_input ($input){
        $this->data = empty($input) ? "" : var_dump($input);
        $this->type = "LoadScreen";
	}
    function change_view(){
        $view[]=$this->type;
        $view[]=$this->data;
        return $view;
    }
    
}

<?php

class model{
    public $type;
    public $data=[];
	function process_input ($input){
           $this->type="GameScreen";
        if (empty($input)){
           $board=[];
           for ($x=0;$x<3;$x++){
                for ($y=0;$y<3;$y++){
                    $board[$x][$y]=0;
                }
            }
           $player=1;
           $this->data["board"]=$board;
           $this->data["player"]=$player;
        } 
            
        

	}
    function change_view(){
        $view[]=$this->type;
        $view[]=$this->data;
        return $view;
    }
    
}

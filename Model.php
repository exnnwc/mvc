<?php
require ("Game.php");
class model{
    public $data=[];
	function process_input ($input){
        $game=new Game();
        if (empty($input)){
            $board=[];
            for ($x=0;$x<3;$x++){
                for ($y=0;$y<3;$y++){
                    $board[$x][$y]=0;
                }
            }
            $player=1;
        } else if (!empty($input)){
            list($board, $player, $move ) =$input; 
            $board[$move["x"]][$move["y"]] =$player;
            $player=$game->other_player($player);
        }  
        $this->data["board"]=$board;
        $this->data["player"]=$player;
        $this->data["win"]= $game->win($board);
        

	}
    function get_state(){
         return $this->data;
    }
}

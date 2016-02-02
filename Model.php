<?php
require ("Game.php");
class model{
    public $type;
    public $data=[];
	function process_input ($input){
        $game=new Game();
        if (empty($input) || isset($input['reset'])){
           $board=[];
           for ($x=0;$x<3;$x++){
                for ($y=0;$y<3;$y++){
                    $board[$x][$y]=0;
                }
            }
           $player=1;
        } else if (isset($input['data'])){
           list($board, $player, $move ) =json_decode($_POST['data'], true); 
           $board[$move["x"]][$move["y"]] =$player;
           $player=$game->other_player($player);
        }  
        $this->data["board"]=$board;
        $this->data["player"]=$player;
        $this->data["win"]= $game->win($board);
        $this->type="GameScreen";

	}
    function fetch_view_data(){
        $view[]=$this->type;
        $view[]=$this->data;
        return $view;
    }
}

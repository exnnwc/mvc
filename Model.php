<?php
require ("Game.php");
class model{
    public $type;
    public $data=[];
	function process_input ($input){
           $board=[];
           $this->type="GameScreen";
        if (empty($input) || isset($_POST['reset'])){
           for ($x=0;$x<3;$x++){
                for ($y=0;$y<3;$y++){
                    $board[$x][$y]=0;
                }
            }
           $player=1;
        } else if (isset($_POST['data'])){
           list($board, $player, $move ) =json_decode($_POST['data'], true); 
           $board[$move["x"]][$move["y"]] =$player;
           $game=new Game();
           $player=$game->other_player($player);
           $game->win($board);
        }  
           $this->data["board"]=$board;
           $this->data["player"]=$player;
	}
    function change_view(){
        $view[]=$this->type;
        $view[]=$this->data;
        return $view;
    }
}

<?php
include ("Board.php");
class GameScreen{
    function view($data){
        $debug=true;
        $board= new Board;
        $string = $debug ? __CLASS__ : "";
        $string = $string . "<div style='text-align:center;'>";
        $string = $string . $board->view($data['board']); 
        $string = $string . "You are player ".$data['player'].". Make your move please.</div>";
        return $string;
    }

}

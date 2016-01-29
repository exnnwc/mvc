<?php
include ("Board.php");
class GameScreen{
    function view($data){
        $debug=false;
        $board= new Board;
        $string = $debug ? __CLASS__ : "";
        $string = $string . "<div style='text-align:center;'>
                             <form method='post' action=''>
                             <input type='hidden' name='reset' value='true' />
                             <input type='submit' value='Reset' />
                             </form>";
        $string = $string . $board->view($data); 
        $string = $string . "You are player ".$data['player'].". Make your move please.</div>";
        return $string;
    }

}

<?php
include ("Board.php");
class GameScreen{
    function get($data){
        $board= new Board;
        $string = "<div style='text-align:center;'>". $board->get($data) . "</div> 
                       <div style='text-align:center;'>
                           <form method='post' action=''>
                           <input type='hidden' name='reset' value='true' />
                           <input type='submit' value='Reset' />
                           </form>";
        switch ($data['win']){
            case 0:
                $string = $string . "You are player ".$data['player'].". Make your move please.</div>";
                break;
            case 1:
            case 2:
                $string = $string . "Player ".$data['win']." has won!</div>";
                break;
            case 3:
                $string = $string . "Stalemate!</div>";
                break;
        }
            
        return $string;
    }
}

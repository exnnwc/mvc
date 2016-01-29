<?php

class Board{
    function view($data){
        define("TD_SIZE", 10);
        $board=$data['board'];
        $player=$data['player'];
        $debug=false;
        $string= $debug ? __CLASS__ : "";
   
        $string=$string . " <table style='border:1px solid black;'>";
        for ($y=0;$y<3;$y++){
            $string=$string."<tr>";
            for ($x=0;$x<3;$x++){
                $string=$string."<td style='text-align:center;border:1px solid gray;height:".TD_SIZE."px;width:".TD_SIZE."px;'>";
                if ($board[$x][$y]==1){
                    $string=$string."X";
                } else if ($board[$x][$y]==2){
                    $string=$string . "O";
                } else if ($board[$x][$y]==0){
                $move=["x"=>$x,"y"=>$y];
                $arr=[$board, $player, $move];
                $string= $string . "
                <form method='post' action=''>
                <input type='hidden' name='data' value='". json_encode($arr) . "' />
                <input name='move' type='submit' value='' />
                </form>";
                }
                $string=$string."</td>";
            }
            $string=$string."</tr>";
        }
        $string=$string."</table>";
        return $string;
   } 

}

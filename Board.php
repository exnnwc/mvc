<?php

class Board{
    function view($board){
        define("TD_SIZE", 50);
        $debug=true;
        $string= $debug ? __CLASS__ : "";
   
        $string=$string . " <table style='border:1px solid black;'>";
        for ($y=0;$y<3;$y++){
            $string=$string."<tr>";
            for ($x=0;$x<3;$x++){
                $string=$string."<td style='border:1px solid gray;height:".TD_SIZE."px;width:".TD_SIZE."px;'>";
                if ($board[$x][$y]==1){
                    $string=$string."X";
                } else if ($board[$x][$y]==2){
                    $string=$string . "O";
                }
                $string= $string . <<<INPUT
                <input name='board' type='hidden' value='$board[$x][$y]' />
                
INPUT;  
                $string=$string."</td>";
            }
            $string=$string."</tr>";
        }
        $string=$string."</table>";
        return $string;
   } 

}

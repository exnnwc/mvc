<?php
class Game{
    function win($board){
        $positions=$this->get_positions($board);
        if (sizeof($positions[0])==0){
            return 0;
        }
            var_dump(array_count_values($positions[0]["x"])); 
    }
    function other_player($player){
        return ($player==1)?2:1;
    }
    function get_positions($board){
        $positions=[];
        for($x=0;$x<3;$x++){
            for($y=0;$y<3;$y++){
                $positions[$board[$x][$y]]["x"][]=$x; 
                $positions[$board[$x][$y]]["y"][]=$y; 
            }
        }
        return $positions;
    }
}

<?php
class Game{
    function win($board){
        if ($this->get_num_of_moves($board)>=5){
            $positions=$this->get_positions($board);
            if (isset($positions[0]) && sizeof($positions[0])==0){
                return 3;
            }
            if ($nondiagnol=$this->evaluate_nondiagnolly($positions)){
               return $nondiagnol;
            }
            if ($diagnol=$this->evaluate_diagnolly($board)){
                return $diagnol;
            }
        }
        return 0;
    }
    function evaluate_diagnolly($board){
        if ($board[0][0]!=0 && $board[0][0]==$board[1][1] && $board[1][1]==$board[2][2]){
            return $board[0][0];
        } else if ($board[1][1]!=0 && $board[2][0]==$board[1][1] && $board[1][1]==$board[0][2]){
            return $board[1][1];
        }
    }
    function other_player($player){
        return ($player==1)?2:1;
    }
    function evaluate_nondiagnolly($positions){
        $graph=["x", "y"];
        for($player=1;$player<=2;$player++){
            for($row_or_column=0;$row_or_column<=1;$row_or_column++){
                //var_dump(array_count_values($positions[$player][$graph[$row_or_column]])); 
                foreach(array_count_values($positions[$player][$graph[$row_or_column]]) as $num_of_positions){
                    if ($num_of_positions==3){
                        echo "PLAYER $player won!";
                        return $player;
                    }
                }
            }
        }

    } 
    function get_num_of_moves($board){
        $num=0;
        for($x=0;$x<3;$x++){
            for($y=0;$y<3;$y++){
                if ($board[$x][$y]!=0){
                    $num++;
                }
            }
        }
        return $num;
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

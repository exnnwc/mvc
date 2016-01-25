<?php

class LoadScreen{
    function view($data){
        //$data_dump=var_dump($data);
        $string= "This data";
//        $string= $string . "1 " . $data_dump;
        $string = $string . "  has been processed appropriately.";
        return $string;
    }

}

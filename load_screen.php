<?php
class LoadScreen{
    function view($data){
        $data_dump=$var_dump($data);
        return "This data[$data_dump] has been processed appropriately.";
    }
}

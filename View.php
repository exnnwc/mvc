<?php
include ("GameScreen.php");
class view{
    function fetch($view){
        
        $file_name=$view[0].".php";
        $class_name=$view[0];
        $data=$view[1]; 
        $obj = new $class_name;
        return $obj->view($data);
    }
    function display_view($view){
           echo $this->fetch($view); 
    }

    function isCommandLineInterface(){
        return (php_sapi_name() === 'cli');
    }

}

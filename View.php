<?php
include ("GameScreen.php");
class view{
    function fetch($view){
        $class_name=$view[0];
        $data=$view[1]; 
        $template = new $class_name;
        return $template->view($data);
    }
    function display_view($view){
           echo $this->fetch($view); 
    }
}

<?php
include ("GameScreen.php");
class view{
    protected $template_class_name;
    public $data;
    function set_state($data){
       $this->data=$data; 
    }
    function fetch($view){
        $class_name=$view[0];
        $data=$view[1]; 
        $this->template = new $class_name;
        return $template->view($data);
    }
    function display($template_class_name){
            $template=new $template_class_name; 
            echo $template->get($this->data);
    }
}

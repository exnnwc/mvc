<?php
include ("Controller.php");
include ("View.php");
include ("Model.php");
$model=new model;
$view=new view;
$control=new controller;
$control->user_input($_POST);
$model->process_input($control->get_user_input());
$view->set_state($model->get_state());
$view->display($control->get_view());

	


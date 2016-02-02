<?php
include ("Controller.php");
include ("View.php");
include ("Model.php");
$model=new model;
$view=new view;
$control=new controller;

$model->process_input($control->input($_POST));
$view->display_view($model->fetch_view_data());

	


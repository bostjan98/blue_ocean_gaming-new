<?php

//the function for calling the actions on the controller
function call($controller,$action){
//var_dump($controller);
//var_dump($action);
  //first we load the php file, with the correct controller and model
require_once("app/Controllers/".ucfirst($controller).".php");
//require_once("app/Model/$controller.php");

//we call the action function on the controller
$controller=new $controller;
$controller->{$action}();
}


//an array, for the allowed controllers and their respective actions
$controllers = [
		'view_3d' => ['show'],
		
    ];

//var_dump($controller);
//var_dump($controllers);
  //we check, if the invoked action is part of our mvc code
  //without this check, a malicous product, could execute arbitrary code
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('errorController', 'error');
    }
  } else {
    call('errorController', 'error');
  }



?>
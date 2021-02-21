<?php

require_once "bootstrap/app.php";

$helpers = 'helpers/';

$controllerPath = 'controllers\\';

$viewPath = 'views\\';

$modelsPath = 'models\\';

// $exploded = explode('index.php',$_SERVER['REQUEST_URI']);
// $exploded = explode('/',$exploded[0]);
$exploded = explode('/', $_SERVER['REQUEST_URI']);

$helpers = scandir($helpers);

foreach($helpers as $k => $file){
	if(!in_array($k, [0,1])){
		require_once "helpers/".$file;
	}
}

if(isset($exploded[3])){
	$controller = $controllerPath.ucfirst($exploded[3]).'Controller';
	$controllerObject = new $controller;
	if(isset($exploded[4])){
		$controllerObject->{$exploded[4]}();
	}else{
		$controllerObject->index();
	}
}










?>
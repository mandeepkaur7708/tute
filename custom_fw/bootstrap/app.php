<?php


function load_classes($className){
	require_once $className.".php";
}

spl_autoload_register('load_classes');

?>
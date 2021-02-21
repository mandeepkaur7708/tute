<?php

function load_class($className){
	require_once $className.'.php';
}


spl_autoload_register('load_class');

?>
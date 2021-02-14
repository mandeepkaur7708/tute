<?php

function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}
set_error_handler("exception_error_handler");

try{
	echo 1/0;
}catch(Exception $e){
	throw new ArithmeticError("Error Processing Request");
	
	echo "<pre>";
	print_r($e->getFile());
	print_r($e->getTrace());
	// print_r($e->getMessage());
	// print_r($e->getLine());
}

?>
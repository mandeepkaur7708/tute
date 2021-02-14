<?php

require_once "MyClass.php";


function myFunction():MyClass{
	$object = new MyClass;
	echo "hello";
	return $object;
}


myFunction();

?>
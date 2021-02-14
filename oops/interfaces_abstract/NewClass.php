<?php

require_once "MyInterface.php";
require_once "NewInterface.php";
require_once "ParentClass.php";

class NewClass extends ParentClass implements MyInterface, NewInterface{

	public function test(){
		echo "this is test function from NewClass";
	}

	public function one():bool{
		return true;
	}

	public function two():array{
		return [];
	}
}


?>
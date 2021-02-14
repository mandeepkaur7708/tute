<?php

require_once "NewClass.php";

class MyClass extends NewClass{

	public function __construct(){
		parent::__construct();
		echo "This is MyClass constructor";
	}
}

?>
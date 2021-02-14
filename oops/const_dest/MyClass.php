<?php

class MyClass{

	public function __construct($a){
		echo $a;
	}

	public function test(){
		echo "This is test function";
	}

	public function __destruct(){
		echo "hey";
	}

}


?>
<?php

require_once "MyClass.php";

class NewClass extends MyClass{
// 
	public function __construct(){
		// parent::__construct();
	}


	public function test(){
		// $this->test();
		parent::test();
		// echo "this is new class test function";
	}

	public static function myFunction(){
		// self::testFunction();
		$obj = new self;
		$obj->testFunction();
		echo "This is my function from new class";
	}

	public function testFunction(){
		echo "This is test function";
	}
}
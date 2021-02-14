<?php

require_once "ClassOne.php";

Class ClassTwo extends ClassOne{

	function funcTwo(){
		$this->funcOne();
		echo "This is function two from class two";
	}

}
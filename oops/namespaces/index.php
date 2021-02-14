<?php
	
	require_once "a/test.php";

	use a\b\myFunctions as mf;

	function one(){
		echo "This is another function one";
	}

	one();

	mf\one();
	mf\two();


?>
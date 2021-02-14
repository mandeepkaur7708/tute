<?php
	
	// function a(){
	// 	echo "This is function a";
	// }

	// a();

	$a = 10;
	
	// function myFunction(&$x){
	// 	$x = 20;
	// 	echo $x;
	// }

	// myFunction($a);

	// echo $a;


	function myFunction($a){
		return $a*2;
	}

	$result = myFunction(5);

	echo $result;
?>
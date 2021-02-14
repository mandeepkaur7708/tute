<?php
	
	
	// $myFunction = function($y){
	// 	echo $y;
	// };

	// function testFunction($a,$b){
	// 	$x = 10;
	// 	call_user_func($a,$x);
	// }

	// testFunction($myFunction, $myFunction);


	// $myFunction = function(){
	// 	echo "This is annon function";
	// };

	// // $myFunction();

	// function newFunction($a){
	// 	if(is_object($a)){
	// 		call_user_func($a);
	// 	}else{
	// 		echo $a;
	// 	}
	// }

	// newFunction($myFunction);
	$multiply = 2;
	$myArray = array(1,2,3,4,5,6);
	array_walk($myArray, function($value) use ($multiply){
		echo ($value*$multiply)."<br/>";
	});


	// function my_array_walk($array, $callback){
	// 	foreach($array as $key => $value){
	// 		call_user_func($callback,$value);
	// 	}
	// }

	// $multiply = 2;

	// my_array_walk($myArray, function($value) use ($multiply){
	// 	echo ($value*$multiply)."<br/>";
	// })
?>
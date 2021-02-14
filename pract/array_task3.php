<?php
	$myarray=array();

	// $oneArray = array(1,2,3,4,5,6);

	// $arrayToInsert = array("one","two","three","four","five","six");

	// $sampleArray = array(
	// 					1,
	// 					array("one","two","three","four","five","six"),
	// 					3,
	// 					array("one","two","three","four","five","six"),
	// 					5,
	// 					array("one","two","three","four","five","six")
	// 				);
	// echo "<pre>";
	// print_r($sampleArray)



	$index=0;
	 for($i = 1; $i <= 6; $i++){
	  	if($i % 2 == 0){
		  		$myarray[$index]=array("one","two","three","four","five","six");
		}else{

	  		$myarray[$index] = $i;
	 	}
	 	$index++;
	 }

	echo "<pre>";
	print_r($myarray);


$index=0;
	 for($i = 1; $i <= 6; $i++){
	  	if($i % 2 == 0){
		  		$myarray[$index]=array();
		}else{
	  		$myarray[$index] = $i;
	  	}
	 	$index++;
	}

	echo "<pre>";
	print_r($myarray);






?>
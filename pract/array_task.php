<?php
	
	$myarray = array();

	// $sampleArray = array(
	// 	1,2,3,4,5,6,7,8,9,10
	// );
	// echo "<pre>";
	// print_r($sampleArray);

	for($i = 1; $i <= 10; $i++){
		$myarray[] = $i;
		// $myarray[$i] = $i;
		// array_push($myarray, $i);
	}

	echo "<pre>";
	print_r($myarray);
?>
<?php
	
	$myarray = array();

	// $arrayToInsert = array(1,2,3,4,5,6);

	// $sampleArray = array(1,2,3,4,
	// 								array(1,2,3,4,5,6),
	// 							6,7,8,9,10);

	// echo "<pre>";
	// print_r($sampleArray);

	$index = 0;
	for($i = 1; $i <= 10; $i++){
		if($i == 6){
			for($j = 1; $j <= 6; $j++){
				$myarray[$index][] = $j;
			}
		}else{
			$myarray[$index] = $i;
		}
		$index++;
	}

	echo "<pre>";
	print_r($myarray);
?>
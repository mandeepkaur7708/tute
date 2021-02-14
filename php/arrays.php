<?php

	$myarray = array(
					1,2,3,5,6,7,
								array(1,2,3,4,5,
											array(1,2,3,44,5)
								),8
					);

	// echo "<pre>";
	// print_r($myarray[6][5][3]);

	// echo count($myarray);
	for($i = 0; $i < count($myarray); $i++){
		if(is_array($myarray[$i])){
			for($j = 0; $j < count($myarray[$i]); $j++){
				if(is_array($myarray[$i][$j])){
					for($k = 0; $k < count($myarray[$i][$j]); $k++){
						print_results($myarray[$i][$j][$k]);
						// echo $myarray[$i][$j][$k]."<br/>";
					}
				}else{
					print_results($myarray[$i][$j]);
				}
			}
		}else{
			print_results($myarray[$i]);
		}
	}

	function print_results($value){
		echo $value."<br/>";
	}

?>
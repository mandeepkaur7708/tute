<?php
	
	$myarray = array(
						"one"=>1,
						"two"=>2,
						"three"=>3,
						"four"=>4,
						"five"=>5,
						array(1,2,3,4,5,6)
					);

	// $myarray = array(1,2,3,5,6,7,8);

	// echo "<pre>";
	// print_r($myarray);

	// for($i = 1; $i< count($myarray); $i++){
	// 	echo $myarray[$i]."<br/>";
	// }

	foreach($myarray as $key => $value){
		if(is_array($value)){
			foreach($value as $k => $v){
				echo $v."<br/>";
			}
		}else{
			echo $key.'---->'.$value."<br/>";
		}
	}
?>
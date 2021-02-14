<?php
	
	echo myFunction(

			function($result){
				return implode(',',$result);
			}
	);
	
	function myFunction($callback){
		$dataArray = [1,2,3,4,5,6];
		for($i = 0; $i < count($dataArray); $i++){
			$dataArray[$i] = $dataArray[$i]*2;
		}
		return call_user_func($callback,$dataArray);
		// return implode('-',$dataArray);
	}



?>
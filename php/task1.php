<?php
	
	$table = 2;
	$min = 1;
	$max = 10;
	$minCountForStageone = 1;
	$minCountStage = 1;
	$value = 1;
	for($i = 1; $i <= 10; $i++){
		if($minCountStage == 1){
			if($minCountForStageone < 3){
				$value = $min;
				$min++;
				$minCount++;
			}elseif($minCountForStageone == 3){
				$minCountForStageone = 1;
				$minCountStage++;
			}
		}else{
			if($minCount < 3){
				$value = $min;
				$min++;
				$minCount++;
			}elseif($minCount == 3){
				$minCount = 1;
				$minCountStage++;
			}
		}

		echo $table." x ".$value." = ".($value*$table)."<br/>";
	}


?>
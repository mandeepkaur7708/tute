<?php
	$table=2;
	$m=1;
	$n=1;
	$j=1;
	$q=10;
	$a=1;
	$b=1;
	$value=1;
	$count=0;
	for($i = 1; $i <= 10; $i++){
		if($count==0){
			if($m<=3){
				$table=2;
				$m++;
				$count=$count+1;					
		}
		}else{
			$count=0;
			if($n<=2){
				$table=3;
				$n++;				
			}
			else{
				$m=1;
				$n=1;
			}
		

		}
		echo $table.'x'.$i.'='.($table*$i)."<br/>";
	}

?>
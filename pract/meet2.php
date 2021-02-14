<?php
		$table=2;
		$min=1;
		$max=1;
		$count=0;
	    $count1=0;
		$a=1;
		$val;
		$b=10;
		$j=3;
		 $k=7;
		for($i=1;$i<=10;$i++){
			if($i<=5){
			if($min<=3){
				$table=2;
				$min++;
				$count++;
			}else{
				if(($count==3) && ($max<=2)){
				$table=4;
				$count1++;
				$max++;
				if($count1==2){
					$count=0;
					$count1=0;
					$max=1;
					$min=1;
				}
			}			
			}
			if($i<=3){
				$val= $a;
				$a++;	
			}else{
				if($i==4){
					$val= $b;
					$b--;
				}else{
				$val= $a;
				$a++;
			}
			}



		}else{
			if($min<=3){
				$table=2;
				$min++;
				$count++;
			}else{
				if(($count==3) && ($max<=2)){
				$table=4;
				$count1++;
				$max++;
				if($count1==2){
					$count=0;
					$count1=0;
					$max=1;
					$min=1;
				}
			}			
			}
			if(($i%2)==0){
				$val= $b;
				$b--;
			}else{
				$val= $a;
				$a++;
			}

		}

		




			
			echo $table."x".$val."=".$val*$table."<br/>";
			
			
		}

?>
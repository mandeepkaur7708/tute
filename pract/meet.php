<?php

		 $t=2;
		 $min=1;
		 $max=1;
		 $count=0;
		 $count1=0;
		 $a=1;
		 $val;
		 $s=10;
		 $s1=3;
		 $k=7;
		for($i=1;$i<=10;$i++){
			if($i<=5){
			if($min<=3){
				$t=2;
				$min++;
				$count++;
			}else{
				if(($count==3) && ($max<=2)){
				$t=3;
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
			if($i<=2){
				$val=$a;
				$a++;
			}else{
				$val=$s;
				$s--;
			}



		}else{
			if($min<=3){
				$t=2;
				$min++;
				$count++;
			}else{
				if(($count==3) && ($max<=2)){
				$t=3;
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
			if($i<=8){
				$val=$s1;
				$s1++;
			}else{
				$val=$k;
				$k--;
			}

		}
			
			echo $t."x".$val."=".$val*$t."<br/>";
			
		}

	?>

<?php
	//refer:  https://www.php.net/manual/en/class.splfileinfo.php
	$data = scandir('data');

	foreach($data as $k => $file){
		if($k > 1){
			if(is_dir('data/'.$file)){
				echo $file.' is directory<br/>';
			}else{
				$fileInfo = new SplFileInfo('data/'.$file);
				echo "<pre>";
				// echo date('Y-m-d h:i:s',$fileInfo->getATime());
				// print_r($fileInfo->getFileName());
				print_r($fileInfo->getExtension());
				exit;
				// echo $file.' is file<br/>';
			}
		}
	}


?>
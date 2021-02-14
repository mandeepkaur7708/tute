<?php

$file = fopen('test.txt','r');

// fputs($file, "\nthis is datassss");

while(!feof($file)){
	$data = fgets($file);
	echo "<pre>";
	print_r($data);
}

fclose($file);




?>
<?php

	$StringData = 'this is a file';

	$result = explode(' ',$StringData);


	$arrayString = implode(' ', $result);

	echo "<pre>";
	print_r($result);
	print_r($arrayString);
?>
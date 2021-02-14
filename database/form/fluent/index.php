<?php
	require_once "FluentPDO.php";

	
	$fpdo = new FluentPDO('mysql:host=localhost;dbname=tute','root','');

	$records = $fpdo->from('employess')->select('*')->getResult();

	echo "<pre>";
	print_r($records);

?>
<?php

	$myObj = new stdClass;

	$myObj->var_a = 10;

	$myObj->var_b = 20;

	$myObj->var_c = $myObj->var_a + $myObj->var_b;

	print_r($myObj->var_c);


?>
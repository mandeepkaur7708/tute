<?php

require_once "NewClass.php";

$object = new NewClass;

$object->one()->two();

if(1 == 1){
	$object->three();
}

echo $object->four()->result();


?>
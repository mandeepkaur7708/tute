<?php

require_once "MyClass.php";

$object = new MyClass;

echo "<pre>";

print_r(json_encode($object));

echo $object->getB();

?>
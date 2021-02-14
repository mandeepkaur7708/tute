<?php

require_once "MyClass.php";

$object = new MyClass;

$object->one();

$object->two();

echo $object->a;

$clonedObject = clone $object;

//$object->three();
// echo $object->result();
$clonedObject->three();

echo $clonedObject->result();
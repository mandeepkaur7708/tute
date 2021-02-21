<?php

require_once "autoload.php";

use classes\MyClass;
use classes\NewClass;
use classes\TestClass;

$obj = new MyClass;

$obj->index();


$obj_new = new NewClass;

$obj_new->myFunction();


echo "<br/><br/>";


$newObj = new TestClass;

$newObj->testFunction();

?>
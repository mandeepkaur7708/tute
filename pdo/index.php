<?php

require_once "Database.php";

$object = new Database;

$result = $object->getEmployees();

echo "<pre>";
print_r($result);
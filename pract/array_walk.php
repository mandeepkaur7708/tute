<?php

$dataArray = [1,2,3,4,5,6];
$myFunction =  function($value){
	echo $value.'<br/>';
};
array_walk($dataArray,$myFunction);

?>
<?php


if(!function_exists('view')){

	function view($filePath){
		global $viewPath;
		global $exploded;
		require $viewPath.$exploded[3].'\\'.$filePath.'.php';
	}
}


?>
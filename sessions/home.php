<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header('location:login.php');
	}
?>
<h1>Welcome User </h1>


<a href="logout.php">Logout</a>
<?php
	// if(isset($_POST['submit'])){
	// 	$table = $_POST['table'];
	// 	$upto = $_POST['upto'];
	// 	for($i = 1; $i <= $upto; $i++){
	// 		echo $table.' X '.$i.' = '.($table*$i)."<br/>";
	// 	}
	// }
if(isset($_POST['submit'])){
	$t=$_POST['table'];
	$v=$_POST['upto'];
	for($i=1;$i<=$v;$i++){
		echo $t.'x'.$i.'='.($t*$i)."<br />";
	}
}
?>

<html>
	<head>
		<title>Tasks</title>
	</head>
	<body>
		<form method="post">
			<label>Table of:</label>
			<input type="text" name="table" value="" />

			<br/>

			<label>Upto</label>
			<input type="text" name="upto" value="" />

			<input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>
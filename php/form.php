<?php
	if(isset($_POST['submit'])){
		echo "<pre>";
			print_r($_POST);
		echo "</pre>";
}
	// if(isset($_POST['submit'])){
	// 	$name = $_POST['name'];
	// 	$name = $_POST['name'];
	// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<table border="1" cellpadding="0" cellspacing="0" align="center" width="300">
			<tr>
				<td height="30">Name</td>
				<td>:</td>
				<td>
					<input type="text" name="name" value="">
				</td>
			</tr>
			<tr>
				<td height="30">Email</td>
				<td>:</td>
				<td>
					<input type="text" name="email" value="">
				</td>
			</tr>
			<tr>
				<td height="30">Phone</td>
				<td>:</td>
				<td>
					<input type="text" name="phone" value="">
				</td>
			</tr>
			<tr>
				<td height="30" colspan="4" align="center">
					<input type="submit" name="submit" value="Submit"/>
				</td>
			</tr>
		</table>	
	</form>
	
</body>
</html>
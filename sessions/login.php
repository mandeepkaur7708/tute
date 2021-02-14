<?php
	$message = '';
	session_start();
	if(isset($_SESSION['user'])){
		header('location:home.php');
	}
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		if($email == 'admin@gmail.com' && $password == '123456'){
			$_SESSION['user'] = $email;
			header('location:home.php');
		}else{
			$message = "Wrong user details";
		}
	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="">
		<table align="center" width="300" border="1">
			<tr>
				<td colspan="3" align="center"><b>User Login</b></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" value="" /></td>
			</tr>
			<tr>
				<td colspan="3" style="color: red; text-align: center;"><?=$message?></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="login" value="Login">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
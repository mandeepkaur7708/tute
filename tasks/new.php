<?php
session_start();

	if(isset($_POST['submit'])){
		if(!isset($_SESSION['user'])){
			$user=array();
			$user[]=$_POST;
			$_SESSION['user']=$user;
		}else{			
			$user=$_SESSION['user'];
			$user[]=$_POST;
			$_SESSION['user']=$user;
		}
		
	}
	
	if(isset($_GET['index'])){
		$index=$_GET['index'];
		unset($_SESSION['user'][$index]);
		$_SESSION['user']=array_values($_SESSION['user']);
		header('location:new.php');
	}

?>
<html>
	<head><title>form</title></head>
	<body>
		<form method="post">
			<table border="1" width="300" align="center">
				<tr>
					<td>NAME</td>
					<td><input type="text" class="name" name="name"></td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><input type="text" class="email" name="email"></td>
				</tr>
				<tr>
					<td>MOBILE</td>
					<td><input type="text" class="mobile" name="mobile"></td>
				</tr>
				<tr>
					<td colspan="2" align="center"><input type="submit" class="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</form>
		<br />
		<table border="1" width="300" align="center">
			<thead>
				<tr>
					<td>NAME</td>
					<td>EMAIL</td>
					<td>MOBILE</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>	
			<?php
			//echo "<pre>";
			//print_r($_SESSION['user']);
			//exit;
			for($i=0; $i < count($_SESSION['user']) ; $i++): 						
			?>
			<tr>
				<td><?php echo $_SESSION['user'][$i]['name'] ?></td>
				<td><?php echo $_SESSION['user'][$i]['email'] ?></td>
				<td><?php echo $_SESSION['user'][$i]['mobile'] ?></td>
				<td>
					<a href="new.php?index=<?php echo $i; ?>">Delete</a>
				</td>				
			</tr>	
			<?php
				endfor;	
			?>

			</tbody>

		</table>
	</body>
</html>
<?php
	$errorBag = [];
	include_once "display_error.php";
	include_once "Database.php";
	$db = new Database;
	$message = '';
	$singleRecord = [];
	if(isset($_POST['submit'])){
		foreach($_POST as $key => $value){
			if(trim($value) == ''){
				$errorBag[$key] = $key.' field is required';
			}
		}
		if(empty($errorBag)){
			if(isset($_GET['edit'])){
				$dataToUpdate = [
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'mobile' => $_POST['mobile'],
					'gender' => $_POST['gender'],
					'status' => $_POST['status']
				];
				$db->update('employess',$_GET['edit'],$dataToUpdate);
				$message = 'Record updated!';
				header('location: index.php');
			}else{
				$dataToInsert = [
					'name' => $_POST['name'],
					'email' => $_POST['email'],
					'mobile' => $_POST['mobile'],
					'gender' => $_POST['gender'],
					'status' => $_POST['status']
				];
				$db->insert('employess',$dataToInsert);
				$message = 'Record inserted!';
			}
		}
	}

	$records = $db->getAll('employess');

	if(isset($_GET['edit'])){
		$singleRecord = $db->getWhere('employess',['id'=>$_GET['edit']],'and');
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
	<form method="post">
		<table align="center" border="1" width="500">
			<tr>
				<td colspan="2" align="center">Enter Employee Data</td>
			</tr>
			<tr>
				<td>
					<b>Name:</b>
				</td>
				<td>
					<input type="text" name="name" value="<?=editValue($singleRecord,'name')?>" />
					<?=isAnyError($errorBag,'name')?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Email:</b>
				</td>
				<td>
					<input type="text" name="email" value="<?=editValue($singleRecord,'email')?>" />
					<?=isAnyError($errorBag,'email')?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Mobile:</b>
				</td>
				<td>
					<input type="text" name="mobile" value="<?=editValue($singleRecord,'mobile')?>" />
					<?=isAnyError($errorBag,'mobile')?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Gender:</b>
				</td>
				<td>
					<label><input type="radio" name="gender" value="male" <?=editValue($singleRecord,'gender','radio','male')?> /> Male</label>
					<label><input type="radio" name="gender" value="female" <?=editValue($singleRecord,'gender','radio','female')?> /> Female</label>
					<?=isAnyError($errorBag,'gender','radio')?>
				</td>
			</tr>
			<tr>
				<td>
					<b>Status:</b>
				</td>
				<td>
					<select name="status">
						<option value="1">Active</option>
						<option value="0">In-Active</option>
					</select>
					<?=isAnyError($errorBag,'status')?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center" style="color: green;"><?=$message?></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<input type="submit" name="submit" value="Save Employee">
				</td>
			</tr>
		</table>
	</form>

	<table align="center" width="800" border="1">
		<tr>
			<td><b>Sr.</b></td>
			<td><b>Name</b></td>
			<td><b>Mobile</b></td>
			<td><b>Email</b></td>
			<td><b>Gender</b></td>
			<td><b>Status</b></td>
			<td><b>Actions</b></td>
		</tr>
		<?php
			foreach($records as $key => $value):
		?>
				<tr>
					<td><?=$key+1?></td>
					<td><?=$value['name']?></td>
					<td><?=$value['mobile']?></td>
					<td><?=$value['email']?></td>
					<td><?=$value['gender']?></td>
					<td><?=$value['status']?></td>
					<td>
						<a href="">View</a> |
						<a href="index.php?edit=<?=$value['id']?>">Edit</a> |
						<a href="">Delete</a>
					</td>
				</tr>
		<?php
			endforeach;
		?>
	</table>
</body>
</html>
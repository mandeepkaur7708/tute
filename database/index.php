<?php
require_once "Database.php";

$database = new Database;

$data = $database->getEmployees();

// echo "<pre>";
// print_r($data);

?>

<table border="1">
	<tr>
		<td><b>Sr No.</b></td>
		<td><b>Name</b></td>
		<td><b>Email</b></td>
		<td><b>Mobile</b></td>
		<td><b>Gender</b></td>
		<td><b>Status</b></td>
	</tr>
	<?php
		$index = 1;
		foreach($data as $k =>$record):
	?>
			<tr>
				<td><?php echo $index; ?></td>
				<td><?php echo $record->name; ?></td>
				<td><?php echo $record->email; ?></td>
				<td><?php echo $record->mobile; ?></td>
				<td><?php echo $record->gender; ?></td>
				<td><?php echo $record->status; ?></td>
			</tr>
	<?php
		$index++;
		endforeach;
	?>
</table>
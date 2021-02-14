<?php
require_once "Database.php";
$database= new Database;
$database->updateEmp();
$database->newEmp();
$database->dltEmp();
$database->newEmp();
$data= $database->getEmp();

?>
<table border="1">
	<tr>
		<td><b>Index</b></td>
		<td><b>ID</b></td>
		<td><b>NAME</b></td>
		<td><b>MOBILE</b></td>				
	</tr>
	<?php 
	$index=1;
	foreach($data as $k =>$record):
	?>
		<tr>
			<td><?php echo $index; ?></td>
			<td><?php echo $record->emp_id; ?></td>			
			<td><?php echo $record->name; ?></td>
			<td><?php echo $record->mobile; ?></td>
		</tr>
		<?php 
		$index++;
		endforeach;
		?>

</table>
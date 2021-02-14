<?php
 require_once("Database.php");
 $database = new Database;
 $database->updatestudents();
 
 $data =$database->getStudents();

?>
<table border="1">
	<tr>
		<td><b>Sr.no</b></td>
		<td>student_name</td>
		<td>student_id</td>
		<td>mobile</td>
	</tr>
	 <?php
		$index = 1;
		foreach($data as $k =>$record):
	?>
		<tr>
				<td><?php echo $index; ?></td>
				<td><?php echo $record->student_name; ?></td>
				<td><?php echo $record->student_id; ?></td>
				<td><?php echo $record->mobile; ?></td>
			</tr>
		<?php
		 $index++;
		endforeach;
		?>	
</table>
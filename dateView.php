<?php 
	include 'inc/header.php';
	include 'library/Student.php';

?>


<div class="panel panel-default">
	<div class="panel-heading">
	<h2>
		<a class="btn btn-success" href="add.php">Add Student</a>
		<a class="btn btn-info float-right" href="index.php">Take  Attendance</a>
	</h2>
	</div>
	<div class="panel-body">
			
		<form action="" method="post">
			<table class="table table-striped">
				<tr>
					<th width="30%">Serial</th>	
					<th width="50%">Attendance Date</th>
					<th width="20%">Action</th>
				</tr>

	<?php
		$stu = new Student();

		$get_date = $stu->getDateList();

		if ($get_date){
			$i = 0;
			while ($value = $get_date->fetch_assoc()) {
				$i++;
			

	?>	
				<tr>
					<td><?php echo $i;?></td>
					<td><?php echo $value['attend_time']; ?></td>
					<td>
						<a class="btn btn-info" href="studentView.php?dt=<?php echo $value['attend_time']; ?>">View</a>
					</td>
				</tr>
	<?php 
			}
		} 
	?>		


			</table>
		</form>

	</div>
</div>

<?php include 'inc/footer.php'; ?>
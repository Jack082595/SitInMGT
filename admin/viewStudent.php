<?php
	$viewStudent = view_student(); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-12">
		<h4>View All Student</h4>
		<?php if(count($viewStudent) > 0): ?>	
		<hr/>
		<div class="table-responsive">
			<table border="0" class="table table-striped table-condensed table-bordered">
				<thead>
					<tr>
						<th width="40"></th>
						<th width="80"><center>Student ID</center></th>
						<th width="80"><center>Name</center></th>
						<th width="80"><center>Course</center></th>
						<th width="80"><center>Year level</center></th>
						<th width="200"><center>Status</center></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewStudent as $v): ?>
					<tr>
						<td><center>
							<a href="?p=updateStudent&id=<?php echo htmlentities($v['STUDID']);?>">
								<i class="glyphicon glyphicon-pencil"> </i>
							</a>&nbsp;&nbsp;
							<a href="?p=deleteStudent&id=<?php echo htmlentities($v['STUDID']);?>" onclick="return confirm('Are you sure?');">
								<i class="glyphicon glyphicon-trash"> </i>
							</a>
						</center></td>
						<td><center>
							<a href="?p=viewProfileStudent&id=<?php echo htmlentities($v['STUDID']);?>">
								<?php echo htmlentities($v['STUDID']); ?>
							</a>
						</center></td>
						<td><center>
							<?php echo htmlentities($v['STUDLNAME']).' , '.htmlentities($v['STUDFNAME']).' '.htmlentities($v['STUDMNAME']); ?>
						</center></td>
						<td><center>
							<?php echo htmlentities($v['STUDCOURSE']); ?>
						</center></td>
						<td><center>
							<?php echo htmlentities($v['STUDYR']); ?>
						</center></td>					
						<td><center>
						<?php if($v['STUDSTAT'] == 1)
								echo "ACTIVE";
							else
								echo "INACTIVE";
						?>
						</center></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
		<?php else: ?>
		<div class="text-warning">You do not have student record yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>
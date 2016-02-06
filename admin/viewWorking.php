<?php
	$viewWorking = view_working(); 
?>
<html>
	<head>
		<style type="text/css">


/*			@media (max-width: 575px){
				.tablebox table{
					font-size: 12px;
			}
		}

		@media (max-width: 500px){
				.tablebox table{
					font-size: 10px;
			}
		}

		@media (max-width: 400px){
				.tablebox table{
					font-size: 8px;
			}
		}
*/
		</style>
	</head>
<body>
	<div class="container">
		<div class="row col-xs-12">
		<h4>View All Working Student</h4>
		<?php if(count($viewWorking) > 0): ?>	
		<hr/>
		<!--<h1 class="visible-xs">XS</h1>-->
		<div class="table-responsive">
			<table border="0" class="table table-striped table-condensed table-bordered" id="responsive">
				<thead>
					<tr>
						<th></th>
						<th><center>Working ID</center></th>
						<th><center>Name</center></th>
						<th><center>Course</center></th>
						<th><center>Year</center></th>
						<th><center>Assigned laboratory</center></th>
						<th><center>Date</center></th>
						<th><center>Schedule</center></th>
						<th><center>Status</center></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewWorking as $v): ?>
					<tr>
						<td><center>
							<a href="?p=updateWorking&id=<?php echo htmlentities($v['WORKINGID']);?>">
								<i class="glyphicon glyphicon-pencil"> </i>
							</a>&nbsp;&nbsp;
							<a href="?p=deleteWorking&id=<?php echo htmlentities($v['WORKINGID']);?>&name=<?php echo htmlentities($v['WORKINGFNAME']).' '.htmlentities($v['WORKINGMNAME']).' '.htmlentities($v['WORKINGLNAME']); ?>" onclick="return confirm('Are you sure?');">
								<i class="glyphicon glyphicon-trash"> </i>
							</a>
						</center></td>
						<td><center><a href="?p=viewProfileWorking&id=<?php echo htmlentities($v['WORKINGID']); ?>">
							<?php echo htmlentities($v['WORKINGID']); ?>
						</a>
						</center></td>
						<td><center>
							<?php echo htmlentities($v['WORKINGLNAME']).' , '.htmlentities($v['WORKINGFNAME']).' '.htmlentities($v['WORKINGMNAME']); ?>
						</center></td>
						<td><center><?php echo htmlentities($v['WORKINGCOURSE']); ?></center></td>
						<td><center><?php echo htmlentities($v['WORKINGYR']); ?></center></td>
						<td><center><?php echo htmlentities($v['ASSIGNEDLAB']); ?></center></td>
						<td><center><?php echo htmlentities($v['TIME'])." - ".htmlentities($v['DAYS']) ?></center></td>
						<td><center><?php echo htmlentities($v['DATE']); ?></center></td>
						<td><center>
						<?php if($v['WORKINGSTAT'] == 1)
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
		<div class="text-warning">You do not have working student records yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>
<?php
	$q = '';
	if(isset($_POST['q']))
	{
		$q = trim($_POST['q']);
	}
			
	if($q == '')
		$search = view_working();
	else
		$search = search_working($q); 
?>

<html>
<body>
	<div class="container">
		<div class="row col-lg-12">
			<h4>
				Search Working Scholar
					<div class="pull-right">
					<form method="post" class="form-inline">
						<div class="input-group">
							<input type="text" name="q" value="<?php echo htmlentities($q); ?>" class="form-control input-small" placeholder="Search for working scholar...">
						  <span class="input-group-btn">
							<button class="btn btn-default btn-large" type="submit" name="go">Go</button>
						  </span>					  
						</div><!-- /input-group -->					
					</form>
				</div>
			</h4>
			<hr/>
			<?php if (!isset($_POST['go']) or isset($_POST['go'])): ?>	
				<?php if(count($search) > 0): ?>			
					<table class="table table-striped table-condensed table-bordered">
						<tr>
							<thead>
								<th></th>
								<th width="80"><center>Working ID</center></th>
								<th width="100"><center>Name</center></th>
								<th width="60"><center>Course</center></th>
								<th width="40"><center>Year</center></th>
								<th width="40"><center>Assigned laboratory</center></th>
								<th width="80"><center>Schedule</center></th>
								<th width="60"><center>Status</center></th>
							</thead>
						</tr>
						<tbody>
							<?php foreach($search as $v): ?>
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
											<?php echo htmlentities($v['WORKINGLNAME']).' ,'.htmlentities($v['WORKINGMNAME']).' '.htmlentities($v['WORKINGFNAME']); ?>
										</center></td>
										<td><center><?php echo htmlentities($v['WORKINGCOURSE']); ?></center></td>
										<td><center><?php echo htmlentities($v['WORKINGYR']); ?></center></td>
										<td><center><?php echo htmlentities($v['ASSIGNEDLAB']); ?></center></td>
										<td><center><?php echo htmlentities($v['TIME'])." - ".htmlentities($v['DAYS']) ?></center></td>
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
					<div class="text-info"><b><?php echo count($search);?></b> matching record(s) found.</div>
				<?php else: ?>
					<div class="text-warning">No matching entries found.</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>
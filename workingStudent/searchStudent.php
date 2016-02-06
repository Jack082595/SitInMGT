<?php
	$q = '';
	if(isset($_POST['q']))
	{
		$q = trim($_POST['q']);
	}
			
	if($q == '')
		$search = view_student();
	else
		$search = search_student($q); 
?>

<html>
<body>
	<div class="container">
		<div class="row col-lg-12">
			<h4>
				Search Student
					<div class="pull-right">
					<form method="post" class="form-inline">
						<div class="input-group">
							<input type="text" name="q" value="<?php echo htmlentities($q); ?>" class="form-control input-small" placeholder="Search for student...">
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
								<th width="80"><center>Student ID</center></th>
								<th width="100"><center>Name</center></th>
								<th width="60"><center>Course</center></th>
								<th width="40"><center>Year</center></th>
								<th width="60"><center>Status</center></th>
							</thead>
						</tr>
						<tbody>
							<?php foreach($search as $v): ?>
								<tr>
										<td><center>
										<a href="?p=updateStudent&id=<?php echo htmlentities($v['STUDID']);?>">
											<i class="glyphicon glyphicon-pencil"> </i>
										</a>
										</td></center>
										<td><center><a href="?p=viewProfile&id=<?php echo htmlentities($v['STUDID']); ?>">
											<?php echo htmlentities($v['STUDID']); ?>
										</a>
										</center></td>
										<td><center>
											<?php echo htmlentities($v['STUDLNAME']).' ,'.htmlentities($v['STUDMNAME']).' '.htmlentities($v['STUDFNAME']); ?>
										</center></td>
										<td><center><?php echo htmlentities($v['STUDCOURSE']); ?></center></td>
										<td><center><?php echo htmlentities($v['STUDYR']); ?></center></td>
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
					<div class="text-info"><b><?php echo count($search);?></b> matching record(s) found.</div>
					<?php else: ?>
						<div class="text-warning">No matching entries found.</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>
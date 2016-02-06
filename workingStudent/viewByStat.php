<?php
	$stat = intval($_GET['stat']);
	$viewByStat = view_byStat($stat); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-12">
		<h4>View All Student</h4>
		<?php if($viewByStat > 0): ?>	
		<hr/>
		<table border="0" class="table table-striped table-condensed table-bordered">
			<thead>
				<tr>
					<th><center>Status</center></th>
					<th><center>Student ID</center></th>
					<th><center>Name</center></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($viewByStat as $v): ?>
				<tr>
					<td><center>
					<?php if($v['STUDSTAT']==1)
								echo "ACTIVE";
						  else
								echo "INACTIVE";
					?>
					</center></td>
					<td><center>
						<a href="?p=viewProfile&id=<?php echo htmlentities($v['STUDID']);?>">
							<?php echo htmlentities($v['STUDID']); ?>
						</a>
					</center></td>
					<td><center>
						<?php echo htmlentities($v['STUDLNAME']).' ,'.htmlentities($v['STUDMNAME']).' '.htmlentities($v['STUDFNAME']); ?>
					</center></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php else: ?>
		<div class="text-warning">You do not have student record yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>
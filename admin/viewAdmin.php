<?php
	$viewAdmin = view_admin(); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-12">
		<h4>View All Administrators</h4>
		<?php if(count($viewAdmin) > 0): ?>	
		<hr/>
		<div class="table-responsive">
			<table border="0" class="table table-striped table-condensed table-bordered">
				<thead>
					<tr>
						<th width="60"></th>
						<th width="80"><center>Administrator ID</center></th>
						<th width="100"><center>Name</center></th>
						<th width="60"><center>Status</center></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewAdmin as $v): ?>
					<tr>
						<td><center>
							<a href="?p=updateAdmin&id=<?php echo htmlentities($v['LABSUPID']);?>">
								<i class="glyphicon glyphicon-pencil"> </i>
							</a>&nbsp;&nbsp;
							<a href="?p=deleteAdmin&id=<?php echo htmlentities($v['LABSUPID']);?>&name=<?php echo htmlentities($v['LABSUPFNAME']).' '.htmlentities($v['LABSUPMNAME']).' '.htmlentities($v['LABSUPLNAME']); ?>" onclick="return confirm('Are you sure?');">
								<i class="glyphicon glyphicon-trash"> </i>
							</a>
						</center></td>
						<td><center><a href="?p=viewProfileAdmin&id=<?php echo htmlentities($v['LABSUPID']); ?>">
							<?php echo htmlentities($v['LABSUPID']); ?>
						</a>
						</center></td>
						<td><center>
							<?php echo htmlentities($v['LABSUPLNAME']).' , '.htmlentities($v['LABSUPFNAME']).' '.htmlentities($v['LABSUPMNAME']); ?>
						</center></td>
						<td><center>
						<?php if($v['LABSTAT'] == 1)
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
		<div class="text-warning">You do not have administrator records yet.</div>
		<?php endif; ?>
	</div>
</div>
</body>
</html>
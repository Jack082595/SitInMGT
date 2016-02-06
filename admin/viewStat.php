<?php
	$viewStat = view_Stat(); 
?>
<html>
<body>
	<div class="container">
		<div class="col-md-4"></div>
		<div class="row col-md-4 text-center">
			<h4>View By Status</h4>
			<?php if(count($viewStat) > 0): ?>	
			<hr/>
			<table border="0" class="table table-striped table-condensed table-bordered">
				<thead>
					<tr>
						<th width="80"><center>Status</center></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewStat as $v): ?>
					<tr>
						<td><center>
							<a href="?p=viewByStat&stat=<?php echo htmlentities($v['STUDSTAT']); ?>">
							<?php if($v['STUDSTAT']==1)
									echo "ACTIVE";
								  else
									echo "INACTIVE";
							?>
						</center></td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
			<?php else: ?>
			<div class="text-warning">You do not have courses record yet.</div>
			<?php endif; ?>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
</body>
</html>
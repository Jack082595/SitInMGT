<?php
	$viewYr = view_yr(); 
?>
<html>
<body>
	<div class="container">
		<div class="row col-md-4"></div>
			<div class="row col-md-4 text-center">
				<h4>View by Year level</h4>
				<?php if(count($viewYr) > 0): ?>	
				<hr/>
				<table border="0" class="table table-striped table-condensed table-bordered">
					<thead>
						<tr>
							<th width="80"><center>Year level</center></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($viewYr as $v): ?>
						<tr>
							<td><center>
								<a href="?p=viewByYr&yr=<?php echo htmlentities($v['STUDYR']);?>">
									<?php echo htmlentities($v['STUDYR']); ?>
								</a>
							</center></td>		
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php else: ?>
				<div class="text-warning">You do not have student record yet.</div>
				<?php endif; ?>
			</div>
		<div class="row col-md-4"></div>
	</div>
</body>
</html>
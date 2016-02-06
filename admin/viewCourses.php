<?php
	$viewCourse = view_Course(); 
?>
<html>
<body>
	<div class="container">
		<div class="col-md-4"></div>
		<div class="row col-md-4 text-center">
			<h4>View By Course</h4>
			<?php if(count($viewCourse) > 0): ?>	
			<hr/>
			<table border="0" class="table table-striped table-condensed table-bordered">
				<thead>
					<tr>
						<th width="80"><center>Course</center></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($viewCourse as $v): ?>
					<tr>
						<td><center>
							<a href="?p=viewByCourse&course=<?php echo htmlentities($v['STUDCOURSE']); ?>">
							<?php echo htmlentities($v['STUDCOURSE']); ?>
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
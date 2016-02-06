<?php
	$q = '';
	if(isset($_POST['q']))
	{
		$q = trim($_POST['q']);
	}
			
	if($q == '')
		$search = view_admin();
	else
		$search = search_admin($q); 
?>

<html>
<body>
	<div class="container">
		<div class="row col-lg-12">
			<h4>
				Search Administrator
					<div class="pull-right">
					<form method="post" class="form-inline">
						<div class="input-group">
							<input type="text" name="q" value="<?php echo htmlentities($q); ?>" class="form-control input-small" placeholder="Search for admin...">
						  <span class="input-group-btn">
							<button class="btn btn-default btn-large" type="submit" name="go">Go</button>
						  </span>					  
						</div><!-- /input-group -->					
					</form>
				</div>
			</h4>
			<hr/>
			<?php if (!isset($_POST['go']) or isset($_POST['go'])){ ?>		
				<?php if(count($search) > 0): ?>	
				<table border="0" class="table table-striped table-condensed table-bordered">
					<thead>
						<tr>
							<th width="100"><center>ID</center></th>
							<th width="200"><center>Name</center></th>
							<th width="200"><center>Status</center></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($search as $v): ?>
						<tr>
							<td><center>
								<a href="?p=viewProfileAdmin&id=<?php echo htmlentities($v['LABSUPID']); ?>">
									<?php echo htmlentities($v['LABSUPID']); ?>
								</a>
							</center></td>
							<td><center><?php echo htmlentities($v['LABSUPFNAME'])." , ".htmlentities($v['LABSUPMNAME'])." ".htmlentities($v['LABSUPLNAME'])?>
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
				<div class="text-info"><b><?php echo count($search); ?></b> matching record(s) found.
				<?php else: ?>
				<div class="text-warning">No matching entries found.</div>
				<?php endif; ?>
			<?php } ?>
		</div>
	</div>
</body>
</html>
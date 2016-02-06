<?php
	$id = intval($_GET['id']);
	$get_info = get_photo($id);;
	$student = find_student($id);
	$get_detail = get_sitinDetails($id);
	
	$id = intval($_GET['id']);
	$viewSitin = view_Sitin($id); 
?>
<html>
	<body>
		<div class="container">
			<div class="row">
					 <div class="col-md-6">
						 <h3>Profile</h3>
						 <h4>
							<?php 
								echo htmlentities($student['STUDLNAME']).' , '.htmlentities($student['STUDFNAME']).' '.htmlentities($student['STUDMNAME']);
							?>
							&nbsp;&nbsp;<a href="?p=addSitIn&id=<?php echo htmlentities($id);?>"><i class="glyphicon glyphicon-plus"></i>Add Sit-in&nbsp;&nbsp;</a>
						 </h4>
							<img src="photo.php?id=<?php echo htmlentities($id);?>" height="300" width="300" style="border:2px black solid;padding:10px 10px;"/>
						<?php if($get_info['stat'] == 1)
									echo "<div class='alert alert-success text-center' style='max-width:300px'>Status: ACTIVE</div>";
								else
									echo "<div class='alert alert-warning text-center' style='max-width:300px'>Status: INACTIVE</div>";
						  ?>
					 </div>
					 <div class="col-md-6">
						<h1 class="text-info"> <i class="glyphicon glyphicon-th-list"> </i>&nbsp;&nbsp;Sit-in Record </h1>
						<h4>Total Sit-in:&nbsp;<?php echo htmlentities($get_detail['TOTALSITIN']); ?></h4>
						<h4>Available Sit-in:&nbsp;<?php echo htmlentities($get_detail['AVAILABLESITIN']); ?></h4>
						<?php if(($get_detail['TOTALSITIN']==30) and ($get_detail['AVAILABLESITIN']==0))
							echo "<div class='alert alert-warning' style='max-width:400px;'>Already reached he maximum number of sit-ins</div>";
						?>
						<?php if($viewSitin): ?>	
							<hr/>
							<table border="0" class="table table-striped table-condensed table-bordered">
								<thead>
									<tr>
										<th width="60"></th>
										<th width="60"><center>Date</center></th>
										<th width="200"><center>Work Station</center></th>
										<th width="60"><center>Laboratory</center></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($viewSitin as $v): ?>
										<tr>
											<td><center>
												<a href="?p=updateSitIn&sitinID=<?php echo htmlentities($v['SITINID']);?>&studID=<?php echo htmlentities($v['STUDID']);?>">
												<i class="glyphicon glyphicon-pencil"> </i></a>&nbsp;&nbsp;
											</center></td>
											<td><center>
												<?php echo htmlentities($v['DATE']); ?>
											</center></td>		
											<td><center>
												<?php echo htmlentities($v['WORKSTATION']); ?>
											</center></td>
											<td><center>
												<?php echo htmlentities($v['LABORATORY']); ?>
											</center></td>						
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<?php else: ?>
								<div class="text-warning">No sit-in record yet.</div>
							<?php endif; ?>
						</div>
			</div>
		</div>
	</body>
</html>
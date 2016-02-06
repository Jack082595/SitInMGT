<?php
	$id = intval($_GET['id']);
	$get_info = get_photo($id);
	$admin = find_admin($id);
	$working = find_working($id);
	$student = find_student($id);
?>
<html>
	<style>
		.box{max-width:330px;}
	</style>
	<body>
		<div class="container">
			<div class="row">
					 <div class="col-md-6">
						 <h3>Profile</h3>
						 <h4>
							<?php 
									echo htmlentities($working['WORKINGLNAME']).' , '.htmlentities($working['WORKINGFNAME']).' '.htmlentities($working['WORKINGMNAME']);
							?>
						 </h4>
							<img src="photo.php?id=<?php echo htmlentities($id);?>" height="300" width="300" style="border:2px black solid;padding:10px 10px;" />
					 </div>
					 <div class="col-md-6"></div>
			</div>
			<div class="row">
					 <div class="box col-md-12 text-center">
						  <?php if($get_info['stat'] == 1)
									echo "<div class='alert alert-success'>Status: ACTIVE</div>";
								else
									echo "<div class='alert alert-warning'>Status: INACTIVE</div>";
						  ?>
					  </div>
			</div>
		</div>
	</body>
</html>
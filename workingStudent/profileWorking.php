<?php
	$get_working = find_working($_SESSION['id']);
?>
<html>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<img src="photo.php?id=<?php echo htmlentities($_SESSION['id']);?>" height="250" width="250" style="border-radius:10em;border:2px solid blue;margin:15px 55px 15px;">
			</div>
			<div class="col-md-4"></div>
		</div><!-- end row of profile picture-->
		
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
					<?php if($get_working['WORKINGSTAT']==1):?>
						<div class="alert alert-success text-center" >ACTIVE</div>
					<?php else: ?>
						<div class="alert alert-warning text-center" >INACTIVE</div>
					<?php endif; ?>
			</div>
			<div class="col-md-4"></div>
		</div><!-- end row for status-->
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-info"><?php echo htmlentities($get_working['WORKINGID']);?></div>
			</div>
		</div>
		<!--end row of ID-->

		<div class="row">
			<div class="col-md-12 text-center">
				<a href="?p=updateWorking&id=<?php echo htmlentities($get_working['WORKINGID']);?>">
					Edit&nbsp;<i class="glyphicon glyphicon-pencil"></i>
				</a>
				<a href="?p=deleteWorking&id=<?php echo htmlentities($get_working['WORKINGID']);?>" onclick="return confirm('Are you sure?');">
					Delete&nbsp;<i class="glyphicon glyphicon-trash"></i>
				</a>
				<h2>Welcome <?php echo htmlentities($get_working['WORKINGFNAME']).' '.htmlentities($get_working['WORKINGMNAME']).' '.htmlentities($get_working['WORKINGLNAME']);?>:-)</h2>
			</div>
		</div><!--end row for delete and edit-->
	</div><!-- end of container-->
</body>
</html>
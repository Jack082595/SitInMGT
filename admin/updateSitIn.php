<?php
	$message = '';
	$lab = '';
	$station = '';
	$sitinID = intval($_GET['sitinID']);
	$studID = intval($_GET['studID']);
	$get_sitin = get_sitinRecord($studID);
	$viewLab = view_lab();
	
	//check if button submit is clicked
	$message = '';
	if(isset($_POST['submit']))
	{
			$lab = trim($_POST['lab']);
			$station = trim($_POST['station']);
			// sit-in record 
			update_SitinRecord(time,date("y-m-d"),$station,$lab,$sitinID);
			$message = "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully updated.</div>";			
			echo "<script>";
			//go back to viewPhotos page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewProfileStudent&id=$studID'; }, 2000);";
			echo "</script>";
	}
	else{
		//if not submitted we retrieve the data from the database
		if($get_sitin)
		{
			$lab = $get_sitin['LABORATORY'];
			$station = $get_sitin['WORKSTATION']; 
		}
		else
		{
			$message = '<div class="alert alert-warning">The specified student record cannot be found.</div>';
		}
	}
?>
<html>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4" style="max-width:200;">
				<form method="post">
					<?php echo $message; ?>
						<a href="../pc/pc.php" target="_blank"><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;WORKSTATIONS&nbsp;</a>
					<div class="form-group">
						<label>Laboratory:</label>
						<select name="lab" type="select" class="form-control" required="required">
							<option value='' disabled>Select Laboratory</option>
							<?php foreach($viewLab as $v):?>
								<option value=<?php echo htmlentities($v['LABROOMNO']);?>><?php echo htmlentities($v['LABROOMNO']);?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="form-group">
						<label>Working Station:</label>
						<input class="form-control" type="number" name="station" min="1" max="50" required="required" value="<?php echo htmlentities($station);?>"/>
					</div>
						<center><button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
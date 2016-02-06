<?php
	$message = '';
	$lab = '';
	$station = '';
	$id = intval($_GET['id']);
	$get_sitin = get_sitinDetails($id);
	
	//check if button submit is clicked
	$message = '';
	if(isset($_POST['submit']))
	{
			$lab = trim($_POST['lab']);
			$station = trim($_POST['station']);
			// sit-in record 
			if($get_sitin['TOTALSITIN']<=29){
				$get_sitin['TOTALSITIN'] = $get_sitin['TOTALSITIN'] + 1;
				$get_sitin['AVAILABLESITIN'] = $get_sitin['AVAILABLESITIN'] - 1;
				$message = "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully added.</div>";
				update_SitIn($get_sitin['TOTALSITIN'],$get_sitin['AVAILABLESITIN'],$id);
			
				add_SitIn(time,date("y-m-d"),$station,$lab,$id);
			}
			else{
				$message = "<div class = 'alert alert-warning' style = 'width: 265px;'>Reached maximum number of sit-ins.</div>";	
			}			
			echo "<script>";
			//go back to viewPhotos page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewProfile&id=$id'; }, 2000);";
			echo "</script>";
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
							<option value='524'>524</option>
							<option value='526'>526</option>
							<option value='528'>528</option>
							<option value='530'>530</option>
							<option value='540'>540</option>
							<option value='542'>542</option>
							<option value='544'>544</option>
						</select>
					</div>
					<div class="form-group">
						<label>Working Station:</label>
						<input class="form-control" type="number" name="station" min="1" max="50" value="<?php echo htmlentities($station);?>"/>
					</div>
						<center><button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button></center>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?php
	$message = '';
	$id = '';
	$fName = '';
	$mName = '';
	$lName = '';
	$course = '';
	$yr = '';
	
	//check if button submit is clicked
	$message = '';
	if(isset($_POST['submit']))
	{
		$photo = $_FILES['photo'];
		if($photo && !$photo['error'])
		{
			$name = $photo['name'];
			$type = $photo['type'];
			$path = $photo['tmp_name'];
			$bytes = file_get_contents($path);
			
			$fName = trim($_POST['fName']);
			$mName = trim($_POST['mName']);
			$lName = trim($_POST['lName']);
			$id = trim($_POST['id']);
			$course= trim($_POST['COURSE']);
			$yr = trim($_POST['YR']);
			
			add_student($id,$fName,$mName,$lName,$course,$yr,1);
			add_sitinDetails($id,0,30); //Sit-in details for student is added
			add_photo($id,$name,$type,$bytes,'student',1);
			$target = "../uploadedPhotos/";  
			$target = $target . basename( $_FILES['photo']['name']); 
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			{  
				//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
			}  
			$message = "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully added.</div>";			
			echo "<script>";
			//go back to viewPhotos page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewStudent'; }, 2000);";
			echo "</script>";
		}
		else
		{
			$message = "<div class = 'alert alert-warning' style = 'width: 265px;'>Photo is invalid!</div>";
		}
	}
?>
<html>
<body>
	<div class="container">	
		<h4>Add Student</h4>
		<hr/>
		<form method="post" enctype="multipart/form-data">
		 <div class="col-md-4">
			<?php echo $message; ?>
				<div class="form-group">
					<label>Profile:</label>
					<input type="file" name="photo"/>
				</div>
			<div class="form-group">
				<label>ID:</label>
				<input class="form-control" type="number" name="id" required="required" value="<?php echo htmlentities($id);?>"/>
			</div>
			<div class="form-group">
				<label>First Name:</label>
				<input class="form-control" type="text" name="fName" required="required" value="<?php echo htmlentities($fName);?>"/>
			</div>
			<div class="form-group">
				<label>Middle Name:</label>
				<input class="form-control" type="text" name="mName" value="<?php echo htmlentities($mName);?>"/>
			</div>
			<div class="form-group">
					<label>Last Name:</label>
					<input class="form-control" type="text" name="lName" required="required"  value="<?php echo htmlentities($lName);?>"/>
			</div>
			<div class="form-group">
					<label>Course:</label>
						<select name="COURSE" type="select" class="form-control" required="required">
							<option value='' disabled>Select Course</option>
							<option value='ACT'>ACT</option>
							<option value='BSIT'>BSIT</option>
							<option value='BSED'>BSED</option>
							<option value='BEED'>BEED</option>
							<option value='BSBA'>BSBA</option>
							<option value='BSA'>BSA</option>
							<option value='BSHRM'>BSHRM</option>
							<option value='BSCRIM'>BSCRIM</option>
						</select>
			</div>
			<div class="form-group">
					<label>Year level:</label>
					<select name="YR" type="select" class="form-control" required="required">
						<option value='' disabled>Select Yr level</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
						<option value='5'>5</option>
					</select>
			</div>
					<button class="btn" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button>
		 </div>
		</form>
	</div>
</body>
</html>
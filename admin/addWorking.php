<?php
	//check if button submit is clicked
	$message = '';
	$mName = '';
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
			$lab = trim($_POST['lab']);
			$days = trim($_POST['days']);
			$time = trim($_POST['time']);
			$pass = trim($_POST['pass']);
			
			
			add_working($id,$fName,$mName,$lName,$course,$yr,1,$lab,$time,$days,date("y-m-d"));
			add_account($id,$pass,'working scholar');
			add_photo($id,$name,$type,$bytes,'working scholar',1);
			$target = "../uploadedPhotos/";  
			$target = $target . basename( $_FILES['photo']['name']); 
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			{  
				//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
			}  
			$message = "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully added.</div>";			
			echo "<script>";
			//go back to viewPhotos page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewWorking'; }, 2000);";
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
			<div class="form-group">
					<label>Assigned Laboratory:</label>
					<select name="lab" type="select" class="form-control" required="required">
						<option value='' disabled>Select Laboratory</option>
						<option value='524'>524</option>
						<option value='526'>526</option>
						<option value='528'>528</option>
						<option value='530'>530</option>
						<option value='542'>542</option>
						<option value='544'>544</option>
					</select>
			</div>
			<div class="form-group">
					<label>Schedule:</label>
					<select name="days" type="select" class="form-control" required="required">
						<option value='' disabled>Select Days</option>
						<option value='MWF'>MWF</option>
						<option value='TTH'>TTH</option>
					</select><br/>
					<select name="time" type="select" class="form-control" required="required">
						<option value='' disabled>Select Time</option>
						<option value='7:30-12:30 PM'>7:30-12:30 PM</option>
						<option value='12:30-5:30 PM'>12:30-5:30 PM</option>
						<option value='5:30-9:30 PM'>5:30-9:30 PM</option>
					</select>
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" name="pass" required="required"/>
			</div>
					<button class="btn" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button>
		 </div>
		</form>
	</div>
</body>
</html>
<?php
	$message = '';
	if(!isset($_GET['id']))
	{
		//working id is not specified go back to viewWorkingpage
		header('Location: ?p=viewWorking');
		exit();
	}
	$id = intval($_GET['id']);
	
	//check if button submit is clicked
	if(isset($_POST['submit']))
	{
		$fName= trim($_POST['fName']);
		$mName = trim($_POST['mName']);
		$lName = trim($_POST['lName']);	
		$course = trim($_POST['COURSE']);	
		$yr = trim($_POST['YR']);	
		$lab = trim($_POST['lab']);		 
		$time = trim($_POST['time']);		
		$days = trim($_POST['days']);		
		$pass = trim($_POST['pass']);
		
		$photo = $_FILES['photo'];
		
		if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			update_working($fName,$mName,$lName,$course,$yr,$lab,$time,$days,$id);
			update_account($pass,$id);
			$message = "<div class = 'alert alert-success' style = 'width: 350px;'>$fName $mName $lName record has been successfully updated.</div>";	
			echo "<script>";
			//go back to viewMed page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewWorking'; }, 2000);";
			echo "</script>";
		}
		else 
		{
			if($photo && !$photo['error'])
			{
				$name = $photo['name'];
				$type = $photo['type'];
				$path = $photo['tmp_name'];
				$bytes = file_get_contents($path);
				$user = $_SESSION['user'];
				update_photo($name,$type,$bytes,$user,$id);
				update_working($fName,$mName,$lName,$course,$yr,$lab,$time,$days,$id);
				update_account($pass,$id);
				$message = "<div class = 'alert alert-success' style = 'width: 350px;'>$fName $mName $lName record has been successfully updated.</div>";	
				echo "<script>";
				//go back to viewMed page after 3 seconds.
					echo "setTimeout(function(){ document.location = '?p=viewWorking'; }, 2000);";
				echo "</script>";
			}
			else
			{
				$message = "<div class = 'alert alert-warning' style = 'width: 350px;'>Invalid File.</div>";	
			}
		}
	}
	else 
	{
		//if not submitted we retrieve the data from the database
		$workingFind = find_working($id);
		if($workingFind)
		{
			$fName= $workingFind['WORKINGFNAME'];
			$mName = $workingFind['WORKINGMNAME'];
			$lName = $workingFind['WORKINGLNAME'];
			$course = $workingFind['WORKINGCOURSE'];
			$yr = $workingFind['WORKINGYR'];
			$lab = $workingFind['ASSIGNEDLAB'] ;
			$time = $workingFind['TIME']	;
			$days = $workingFind['DAYS'];
			$get_pass = get_pass($id);
			$pass = $get_pass['PASSWORD'];
		}
		else
		{
			$message = '<div class="alert alert-warning">The specified working student record cannot be found.</div>';
		}
	}
?>
<html>
	<body>
		<div class="container">		
				<h4>Update Working Student</h4>
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
				<input type="password" class="form-control" name="pass" value="<?php echo htmlentities($pass);?>"/>
			</div>
					<button class="btn" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button>
		 </div>
			</form>
		</div>
	</body>
</html>
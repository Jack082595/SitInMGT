<?php
	$message = '';
	if(!isset($_GET['id']))
	{
		//med id is not specified go back to viewMed page
		header('Location: ?p=viewStudent');
		exit();
	}
	$id = intval($_GET['id']);
	
	//check if button submit is clicked
	if(isset($_POST['submit']))
	{
		$fName= trim($_POST['STUDFNAME']);
		$mName = trim($_POST['STUDMNAME']);
		$lName = trim($_POST['STUDLNAME']);	
		$course = trim($_POST['STUDCOURSE']);	
		$yr = trim($_POST['STUDYR']);	
		$photo = $_FILES['photo'];
		
		if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			update_student($fName,$mName,$lName,$course,$yr,$id);
			$message = "<div class = 'alert alert-success' style = 'width: 350px;'>Student record has been successfully updated.</div>";	
			echo "<script>";
			//go back to viewMed page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewStudent'; }, 2000);";
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
				update_student($fName,$mName,$lName,$course,$yr,$id);
				$message = "<div class = 'alert alert-success' style = 'width: 350px;'>$fName $mName $lName record has been successfully updated.</div>";	
				echo "<script>";
				//go back to viewMed page after 3 seconds.
					echo "setTimeout(function(){ document.location = '?p=viewStudent'; }, 2000);";
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
		$studentFind = find_student($id);
		if($studentFind)
		{
			$fName = $studentFind['STUDFNAME'];
			$mName = $studentFind['STUDMNAME']; 
			$lName= $studentFind['STUDLNAME'];
			$course = $studentFind['STUDCOURSE'];
			$yr = $studentFind['STUDYR'];
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
			<h4>Update Student Record</h4>
			<hr/>
			<form method="post" enctype="multipart/form-data">
				 <div class="col-md-4">
					<?php echo $message; ?>
					<div class="form-group">
						<input type="file" name="photo"/>
					</div>
					<div class="form-group">
						<label>First Name:</label>
						<input class="form-control" type="text" name="STUDFNAME" value="<?php echo htmlentities($fName); ?>" />
					</div>
					<div class="form-group">
						<label>Middle Name:</label>
						<input class="form-control" type="text" name="STUDMNAME" value="<?php echo htmlentities($mName); ?>" />
					</div>
					<div class="form-group">
							<label>Last Name:</label>
							<input class="form-control" type="text" name="STUDLNAME" value="<?php echo htmlentities($lName); ?>" />
					</div>
					<div class="form-group">
						<label>Course:</label>
							<select name="STUDCOURSE" class="form-control" required="required" value="<?php echo htmlentities($course); ?>" />
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
							<select name="STUDYR" class="form-control" required="required" value="<?php echo htmlentities($yr); ?>"/>
								<option value='' disabled>Select Yr level</option>
								<option value=1>1st yr</option>
								<option value=2>2nd yr</option>
								<option value=3>3rd yr</option>
								<option value=4>4th yr</option>
								<option value=5>5th yr</option>
							</select>
					</div>
					<button type="submit" name="submit" class="btn">Save</button>
				 </div>
			</form>
		</div>
	</body>
</html>
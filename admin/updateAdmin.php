<?php
	$message = '';
	if(!isset($_GET['id']))
	{
		//admin id is not specified go back to viewAdmin page
		header('Location: ?p=viewAdmin');
		exit();
	}
	$id = intval($_GET['id']);
	
	//check if button submit is clicked
	if(isset($_POST['submit']))
	{
		$fName= trim($_POST['LABSUPFNAME']);
		$mName = trim($_POST['LABSUPMNAME']);
		$lName = trim($_POST['LABSUPLNAME']);	
		$pass= trim($_POST['LABPASS']);
		$photo = $_FILES['photo'];
		
		if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			update_admin($fName,$mName,$lName,$id);
			update_account($pass,$id);
			$message = "<div class = 'alert alert-success' style = 'width: 350px;'>Account is successfully updated.</div>";	
			echo "<script>";
			//go back to viewMed page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=profileAdmin'; }, 2000);";
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
				update_admin($fName,$mName,$lName,$id);
				update_account($pass,$id);
				$message = "<div class = 'alert alert-success' style = 'width: 350px;'>Account is successfully updated.</div>";	
				echo "<script>";
				//go back to viewMed page after 3 seconds.
					echo "setTimeout(function(){ document.location = '?p=profileAdmin'; }, 2000);";
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
		$adminFind = find_admin($id);
		$user_pass = get_pass($id);
		if($adminFind)
		{
			$fName = $adminFind['LABSUPFNAME'];
			$mName = $adminFind['LABSUPMNAME']; 
			$lName= $adminFind['LABSUPLNAME'];
			$pass = $user_pass['PASSWORD'];
		}
		else
		{
			$message = '<div class="alert alert-warning">The specified admin record cannot be found.</div>';
		}
	}
?>
<html>
	<body>
		<div class="container">		
			<h4>Update Account</h4>
			<hr/>
			<form method="post" enctype="multipart/form-data">
				 <div class="col-md-4">
					<?php echo $message; ?>
					<div class="form-group">
						<input type="file" name="photo"/>
					</div>
					<div class="form-group">
						<label>First Name:</label>
						<input class="form-control" type="text" name="LABSUPFNAME" value="<?php echo htmlentities($fName); ?>" />
					</div>
					<div class="form-group">
						<label>Middle Name:</label>
						<input class="form-control" type="text" name="LABSUPMNAME" value="<?php echo htmlentities($mName); ?>" />
					</div>
					<div class="form-group">
						<div>
							<label>Last Name:</label>
							<input class="form-control" type="text" name="LABSUPLNAME" value="<?php echo htmlentities($lName); ?>" />
						</div>
					</div>
					<div class="form-group">
						<div>
							<label>Password:</label>
							<input class="form-control" type="password" name="LABPASS" value="<?php echo htmlentities($lName); ?>" placeholder="(Optional)"/>
						</div>
					</div>
					<button type="submit" name="submit" class="btn">Save</button>
				 </div>
			</form>
		</div>
	</body>
</html>
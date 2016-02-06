<?php
	$message = '';
	$id = '';
	$fName = '';
	$mName = '';
	$lName = '';
	
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
			$pass = trim($_POST['pass']);
	
			add_admin($id,$fName,$mName,$lName,1);
			add_account($id,$pass,'admin');
			add_photo($id,$name,$type,$bytes,'admin',1);
			$target = "../uploadedPhotos/";  
			$target = $target . basename( $_FILES['photo']['name']); 
			if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
			{  
				//echo "The file ". basename( $_FILES['photo']['name']). " has been uploaded, and your information has been added to the directory";  
			}  
			$message = "<div class = 'alert alert-success' style = 'width: 265px;'>Successfully added.</div>";			
			echo "<script>";
			//go back to viewPhotos page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=manageAdmin/viewAdmin'; }, 2000);";
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
<head>
	<style>

	</style>
</head>
	<div class="container">	
		<h4>Add Administrator</h4>
		<hr/>
		<form method="post" enctype="multipart/form-data">
		 <div class="col-md-4">
			<?php echo $message; ?>
				<div class="form-group">
					<label>Profile</label>
					<input type="file" name="photo" required="required"/>
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
				<input class="form-control" type="text" name="mName" value="<?php echo htmlentities($mName);?>">
			</div>
			<div class="form-group">
				<div>
					<label>Last Name:</label>
					<input class="form-control" type="text" name="lName" required="required"  value="<?php echo htmlentities($lName);?>"/>
				</div>
			</div>
			<div class="form-group">
				<div>
					<label>Password:</label>
					<input class="form-control" type="password" name="pass" required="required"/>
				</div>
			</div>
					<button class="btn" type="submit" name="submit"><i class="glyphicon glyphicon-floppy-disk"> </i> Save</button>
		 </div>
		</form>
	</div>
</body>
</html>
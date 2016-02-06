<?php
	$message = '';
	$id = intval($_GET['id']);
	//we use $_GET because data input came from the URL
	if(isset($_GET['id']))
	{
		$id = trim($id);
		$deleteStudent = find_student($id);
		if($deleteStudent)
		{
			delete_student(0,$id);
			delete_photo(0,$id);
				$message = "<div class = 'alert alert-success' style = 'width: 350px;'>Selected student has been successfully deleted.</div>";	
			echo "<script>";
			//go back to viewMed page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewStudent'; }, 2000);";
			echo "</script>";
		}
		else
		{
			$message = "<div class = 'alert alert-warning' style = 'width: 350px;'>Specified student cannot be found</div>";	
		}
	}
?>
<html>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<?php echo $message; ?>
				</div>
			</div>
		</div>
	</body>
</html>




</html>

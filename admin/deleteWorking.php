<?php
	$message = '';
	$id = intval($_GET['id']);
	$name = trim($_GET['name']);
	//we use $_GET because data input came from the URL
	if(isset($_GET['id']))
	{
		$id = trim($id);
		$deleteWorking = find_working($id);
		if($deleteWorking)
		{
			delete_working(0,$id);
			delete_photo(0,$id);
				$message = "<div class = 'alert alert-success' style = 'width: 350px;'>$name has been successfully deleted.</div>";	
			echo "<script>";
			//go back to viewMed page after 3 seconds.
				echo "setTimeout(function(){ document.location = '?p=viewWorking'; }, 2000);";
			echo "</script>";
		}
		else
		{
			$message = "<div class = 'alert alert-warning' style = 'width: 350px;'>Specified working scholar cannot be found</div>";	
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

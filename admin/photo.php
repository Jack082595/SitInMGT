<?php
	include "../db.php";
	
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		$photo = get_photo($id);
		if($photo)
		{
			header("content-type: ". $photo['type']);
			//header("content-disposition:inline;filename=". $photo['name']);
			echo $photo['bytes'];
		}
	}
?>
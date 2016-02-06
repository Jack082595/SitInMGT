<?php
	include('db.php');
	if(isset($_SESSION['isloginAdmin']) && $_SESSION['isloginAdmin'] == true)
		header('Location: admin');    /*Once it was logout,it can't be back to admin page */
	else if(isset($_SESSION['isloginScholar']) && $_SESSION['isloginScholar'] == true)
		header('Location: workingStudent');    /*Once it was logout,it can't be back to working scholar page */
	$username = '';
	$pass = '';
	$msg = '';
	
	if(isset($_POST['login']))
	{
		$username = trim($_POST['username']);
		$pass = trim($_POST['password']);
		
		if(login($username,$pass))
		{
			if($_SESSION['isloginAdmin'] == true)
				header("Location: admin");
			else if($_SESSION['isloginScholar'] == true)
				header("Location: workingStudent");
		}
		else
		{
			$msg = '<center><code>Invalid login!</code></center>';
		}
	}
?>
<html>
	<head>
		<title>Login Page</title>
			<link href="bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
			<script src="bootstrap/js/jquery.js"></script>
			<script src="bootstrap/js/bootstrap.js"></script>
			<style>
				body{
					 margin:0 auto; 
					 background:url(images/bg.jpg); 
					 background-size:cover; 
				}
				.box{
					margin:0 auto;
					padding:10px 0 10px 0;
					background-color:#3399ff;
					border: #fff 2px solid; 
					padding:24px; 
					filter:alpha(opacity=10); 
					-moz-opacity=.7; 
					opacity:.9; 
					border-radius:20px;
				}
				.btn{
					background-color: #AB3334;
					border-color: #AB3334;
					color: #FFF;
					}
		  
				.btn:hover{
					background-color: #DDA185;
					border-color: #DDA185;
					}
				.footer{
					background-color:green;
					width:100%;
					padding:5px;
					color: #fff;
					line-height:80px;
					margin-top:13em;
					text-align:center;
				}
				.form-signin {
					max-width: 250px;
					padding: 15px;
					margin: 0 auto;
				}
					
			</style>
	</head>
<body>
	<div class="container">
		<div class="row">
			<div style="margin-top:5em;">
				<div class="col-lg-3"></div>
					<div class="col-lg-6">
						<div class="box">
							<img src='images/cmsLogo.jpg' width='100%' height='125' border='0' alt=''/>
								<form role="form" method = "post" class="form-signin">
									<div class="form-group">	
										<label><h4>Username</h4></label>
										<input class="form-control" type="text" name="username" required = "required"/>
									</div>
									<div class="form-group">	
										<label><h4>Password</h4></label>
										<input type="password" name = "password" class="form-control" required = "required"/>
									</div>
									<div class="form-group">
										<center><button type="submit" class="btn" name="login">Log In</button></center>
									</div>
										<?php echo $msg; ?>
								</form>
						</div>
					</div>
				<div class="col-lg-3"></div>
			</div>
		 </div>  
	</div>
	<div class="footer">
		&copy; Sit-in Management System, 2015
    </div>
	</body>
</html>

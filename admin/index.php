<?php
	include ('../db.php');
	if($_SESSION['isloginAdmin']==true)
	{
		$page = 'profileAdmin';
		if(isset($_GET['p']))
			$page = trim($_GET['p']);
		$content = $page.".php";
		
		if(!file_exists($content))
		{
			$content = "profileAdmin.php";
			$page = "profileAdmin";
		}
		if(isset($_GET['l']))
		{
			logout();
			header('Location: ../');
		}
	}
	else
	{
		header('Location: ../');
	}
?>
<html>
	<head>
			<link href="../bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
			<script src="../bootstrap/js/jquery.js"></script>
			<script src="../bootstrap/js/bootstrap.js"></script>
			<style>
				.container{margin-top:2em;}
				footer{
					background:green;
					padding:15px 15px;
					line-height:50px;
					margin-top:10em;
					font-weight:bold;
					font-size:20px;
					color:#fff;
			}
			@media screen and (min-width: 768px){
			.navbar-header {
				display: none;
			}
			
			
			</style>
	</head>
	<body>
	  <div class="container">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<img src="../images/cmsLogo.jpg" width="100%" style="margin-top:15px;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="?p=manageAdmin/viewAdmin"  style = "color: green;">
				&nbsp;&nbsp;Administrator
			  </a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			 
			  
			  <ul class="nav navbar-nav">
				<li><a href="?p=adminProfile">
					<img src="photo.php?id=<?php echo htmlentities($_SESSION['id']);?>" height="20" width="20" 
					style="border-radius:3em;">&nbsp;&nbsp;Profile</a></li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
					<!--<i class="glyphicon glyphicon-user"></i>-->&nbsp;Administrator<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="?p=viewAdmin"><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;View</a></li>
					<li class="divider"></li>
					<li><a href="?p=addAdmin"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add</a></li>
					<li class="divider"></li>
					<li><a href="?p=searchAdmin"><i class="glyphicon glyphicon-search"> </i>&nbsp;&nbsp;Search</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Working Student <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="?p=viewWorking"><i class="glyphicon glyphicon-th-list"> </i>&nbsp;&nbsp;View</a></li>
					<li class="divider"></li>
					<li><a href="?p=addWorking"><i class="glyphicon glyphicon-plus"> </i>&nbsp;&nbsp;Add</a></li>
					<li class="divider"></li>
					<li><a href="?p=searchWorking"><i class="glyphicon glyphicon-search"> </i>&nbsp;&nbsp;Search</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Student <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="?p=viewStudent"><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;View</a></li>
					<li class="divider"></li>
					<li><a href="?p=addStudent"><i class="glyphicon glyphicon-plus"></i>&nbsp;&nbsp;Add</a></li>
					<li class="divider"></li>
					<li><a href="?p=searchStudent"><i class="glyphicon glyphicon-search"> </i>&nbsp;&nbsp;Search</a></li>
				  </ul>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">View Reports
					<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="?p=viewCourses"><i class="glyphicon glyphicon-th-list"> </i>&nbsp;&nbsp;By Course</a></li>
					<li class="divider"></li>
					<li><a href="?p=viewYrlvl"><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;By Year lvl</a></li>
					<li class="divider"></li>
					<li><a href="?p=viewStat"><i class="glyphicon glyphicon-th-list"></i>&nbsp;&nbsp;By Status</a></li>
				   </ul>
				</li>
			  </ul>
			  <ul class="nav navbar-nav navbar-right">
				<li><a href="?l=true"><i class="glyphicon glyphicon-log-out"></i>&nbsp;&nbsp;Log out</a></li>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	 </div><!-- end of container -->
	
	<?php include_once($content); ?>

	<footer class="col-lg-12 text-center">
		&copy; Sit-in Management System, 2015
	</footer>
	
	</body>
</html>
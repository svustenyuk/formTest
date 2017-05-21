<?php
	require '../includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title><?php echo $config['title']; ?></title>

		 <!-- Bootstrap Core CSS -->
		<link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

		 <!-- Theme CSS -->
		<link href="../css/blog.css"  rel="stylesheet">

	</head>
	<body>
		 <!-- Header -->
		 <?php include '../includes/header.php' ?>
		 
		 <!-- Navigation -->
			<nav id="mainNav" class="navbar navbar-default navbar-custom ">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
						</button>
					</div> 
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav pull-right">
																
									<li><a href="/signup.php"><h4> Вхід</h4></a></li>
							
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
	
		<div class='container'>	
			<div class='bgcolor '>
				<h3> Психолог</h3>
			</div>			
		</div>
	</body>


</html>

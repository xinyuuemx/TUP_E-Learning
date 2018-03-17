<!DOCTYPE HTML>

<html>
	<head>
		<title>TUP E-LEARNING</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/main.css';?>" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css';?>" />
	</head>

	<body class="is-preload">
		<nav>
			<header id="header">
				<div class="topnav">
					<a href="<?php echo base_url().'Student_dashboard/homepage';?>">Home</a>
					<a href="<?php echo base_url().'Student_dashboard/about';?>">About Us</a>
					<a href="<?php echo base_url().'Student_dashboard/contact';?>">Contact Us</a>
					<a href="<?php echo base_url().'student' ?>"><?php $namee=$link_name; echo $namee; ?></a>
					</div>

					<div class="topnav">
						<a href="<?php echo base_url().'Student_dashboard/logout'?>">Sign Out</a>
					</div>
			</header>
		</nav>

		<div class="sidenav">
			<?php $image=$img_id;?>
			<img src="<?php echo base_url().'assets/images/'.$image.'.jpg';?>" alt="Profile Picture" width="240" height="240">

			<ul class="alt">
				<li><b><?php $name_print = $name; echo $name_print;?></b></li>
				<li><?php $sid = $student_id; echo $sid;?></li>
			</ul>	
						
			


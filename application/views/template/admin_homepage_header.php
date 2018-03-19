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
				<div class="topnav"  style="margin-left:1%;">
					<a class="logo" href="<?php echo base_url().'Admin_dashboard/homepage'?>"><i class="icon fa-university" style="margin-right:5px;">&nbsp;</i>TUP E-LEARNING WEBSITE</a>
					<!--<a href="<?php echo base_url().'Admin_dashboard/homepage';?>">Home</a>-->
					<a href="<?php echo base_url().'Admin_dashboard/about';?>">About Us</a>
					<a href="<?php echo base_url().'Admin_dashboard/contact';?>">Contact Us</a>
					</div>
					<div class="topnav">
						<a href="<?php echo base_url().'admin' ?>"><?php echo $name; ?></a>
						<a href="<?php echo base_url().'Admin_dashboard/logout'?>">Sign Out</a>
					</div>
			</header>
		</nav>

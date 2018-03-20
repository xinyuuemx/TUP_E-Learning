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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().'/assets/js/jquery.min.js';?>"></script>
		<!-- BOOTSTRAP
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  -->
	

	</head>

	<body class="is-preload">
		<nav>
			<header id="header">
				
				<div class="topnav" style="margin-right:6px;">

					<a class="logo" href="<?php echo base_url().'Admin_dashboard/homepage'?>"><i class="icon fa-university" style="margin-right:5px;">&nbsp;</i>TUP E-LEARNING WEBSITE</a>
				</div>
				<div class="topnav" style="margin-right:6px;">
					<a href="<?php echo base_url().'admin' ?>"><?php echo $name; ?></a>
					<a  href="<?php echo base_url().'Admin_dashboard/logout'?>">Sign Out</a>
				</div>
			</header>
		</nav>

		<div class="sidenav">
			<?php $image=$img_id;?>
			<img src="<?php echo base_url().'assets/images/'.$image.'.jpg';?>" alt="Profile Picture" width="240" height="240">

			<ul class="alt">
				<li><b><?php $name_print = $name; echo $name_print;?></b></li>
			</ul>

			<ul class="alt">
				<li><a href="<?php echo base_url().'admin';?>">Dashboard</a></li>
				<li><a href="<?php echo base_url().'admin/manage_classes';?>">Manage Classes</a></li>
			</ul>
		</div>
	</body>

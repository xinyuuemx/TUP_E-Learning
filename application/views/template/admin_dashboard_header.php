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
				<div class="topnav" style="margin-left:1%;">
					<a class="logo" href="<?php echo base_url().'Admin_dashboard/administrator'?>"><i class="icon fa-university" style="margin-right:5px;">&nbsp;</i>TUP E-LEARNING WEBSITE</a>
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

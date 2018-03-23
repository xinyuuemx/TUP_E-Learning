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
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/comment.css';?>" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css';?>" />
	</head>

	<body class="is-preload">
		<nav>
				<header id="header">
					<div class="topnav" style="margin-left:1%;">
						<a class="logo" href="<?php echo base_url().'Student_dashboard/homepage'?>"><i class="icon fa-university" style="margin-right:5px;">&nbsp;</i>TUP E-LEARNING WEBSITE</a>
					</div>
					<div class="topnav" style="margin-right:6px;">
							<a  href="<?php echo base_url().'Student_dashboard/logout'?>">Sign Out</a>
					</div>
				</header>
		</nav>

		<div class="sidenav" style="background-color:#111; color:#fff;">
			<?php $image=$img_id;?>
			<img src="<?php echo base_url().'assets/images/'.$image;?>" alt="Profile Picture" width="180" height="180">

			<ul class="alt">
				<li><b><?php $name_print = $name; echo $name_print;?></b></li>
				<li><?php $sid = $student_id; echo $sid;?></li>
			</ul>

			
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
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/codemirror.min.css">
 
    <!-- Include Editor style. -->
    <link href="<?php echo base_url(); ?>assets/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/css/froala_style.min.css" rel="stylesheet" type="text/css" />
	</head>

	<body class="is-preload">
		<nav>
			<header id="header">
				<div class="topnav" style="margin-left:1%;">
					<a class="logo" href="<?php echo base_url().'Prof_dashboard/homepage'?>"><i class="icon fa-university" style="margin-right:5px;">&nbsp;</i>TUP E-LEARNING WEBSITE</a>
				</div>
				<div class="topnav" style="margin-right:6px;">
						<a  href="<?php echo base_url().'Prof_dashboard/logout'?>">Sign Out</a>
				</div>
			</header>
		</nav>

		<div class="sidenav">
			<?php $image=$img_id; ?>
			<img src="<?php echo base_url().'assets/images/'.$image.'.jpg'; ?>" alt="Profile Picture" width="240" height="240">

			<ul class="alt">
				<li><b><?php $name_print = $name; echo $name_print;?></b></li>
				<li><?php $pid = $prof_id; echo $pid;?></li>
			</ul>

			<ul class="alt">
				<li><a href="<?php echo base_url().'professor';?>">Dashboard</a></li>
				<li><a href="<?php echo base_url().'Prof_dashboard/index/classes';?>">Classes</a></li>
				<li><a href="#">Discussions</a></li>
			</ul>
		</div>


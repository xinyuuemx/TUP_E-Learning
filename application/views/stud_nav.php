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
					<a href="home.html">Home</a>
					<a href="">About Us</a>
					<a href="">Contact Us</a>
					</div>
					<div class="topnav-right">
						<a href="">Sign Out</a>
					</div>
			</header>
		</nav>
			
			<div class="sidenav">
			<?php $data['gend']=$gender;?>
			<img src="<?php echo base_url().'assets/images/'.$data['gend'].'.png';?>" alt="Profile Picture" width="240" height="240">
			<ul class="alt">
				<li><b><?php $name = $uname; echo $name;?></b></li>
				<li><?php $sid = $id; echo $id;?></li>
			</ul>	
						
			<ul class="alt">
				<li><a class="active" href="stud_dashboard.html">Dashboard</a></li>
				<li><a href="<?php echo base_url().'pages/student_classes';?>">Classes</a></li>
				<li><a href="#">Discussions</a></li>
				<li><a href="stud_modules.html">Modules</a></li>
			</ul>
			</div>
			</section>
			</div>	
	 
</body>
</html> 
			
<!DOCTYPE HTML>
<html>
	<head>
		<title>TUP E-Learning</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/main.css';?>" />
		<link rel="stylesheet" href="<?php echo base_url().'/assets/css/login.css';?>" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="<?php echo base_url().'pages'?>">Home</a>
				<a class="logo" href="<?php echo base_url().'About_us'?>">About Us</a>
				<a class="logo" href="<?php echo base_url().'Contact_us'?>">Contact Us</a>
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

				<div id="id01" class="modal">
					<div class="modal-content animate">
					<?php echo "<br />";
							if(isset($msg)){
								echo $msg;
								$usern=$username;
								$passw=$password;
							}
							else
							{
								$usern='Enter Student ID';
								$passw='Enter Password';
							}

						  ?>
					<?php echo form_open('pages/login_authorize'); ?>
						<div class="container">
						  <label><b>Username</b></label>
						  <input type="text" placeholder="<?php echo $usern?>" name="uname" required>

						  <label><b>Password</b></label>
						  <input type="password" placeholder="password" name="psw" required>

						  <button class="login" type="submit">Login</button>
								<input type="checkbox" id="checkbox">
								<label for="checkbox" checked>Remember Me</label>
						<div class="container" style="background-color:#f1f1f1">
						  <label class="psw">Forgot <a href="#">password?</a></label>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
			<script>
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == modal) {
					modal.style.display = "none";
				}
			}
			</script>
			</header>

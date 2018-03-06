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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>TUP E-LEARNING</h1>
					<p>Enjoy learning anytime, anywhere.</p>
				</div>
				<video autoplay loop muted playsinline src="<?php echo base_url().'/assets/images/banner.mp4';?>"></video>
			</section>

		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Highlights</h2>
						<p>TUP E-Learning is an interactive website exclusively for the Technological University of the Philippines.  It aims to create a convenient online learning environment between TUP students and professors.</p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Profile</h3>
								</header>
								<p>Each TUPian have an already-made account to access TUP E-Learning where they can bring studying online.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Modules</h3>
								</header>
								<p>Students can have access to lessons per topic from different classes; and take exams online. </p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Save</h3>
								</header>
								<p>Students can download modules from their classes and review lessons anytime, anywhere.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3>Achievements</h3>
								</header>
								<p>Students have achievement board where every activity they do inside the E-Learning is recorded.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Connect</h3>
								</header>
								<p>Both students and professors can connect with each other through personal message and discussions.</p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<h3>Registration Code</h3>
								</header>
								<p>Students are required to enter a verificaion code to join a specific online class created by professors.</p>
							</div>	
						</section>
					</div>
				</div>
			</section>

		<!-- CTA -->
			<section id="cta" class="wrapper">
				<div class="inner">
					<h2>TUP VISION</h2>
					<p>The Technological University of the Philippines shall be the premiere state university with recognized excellence in engineering and technology education at par with leading universities in the ASEAN region.</p>
					<h2>TUP MISSION</h2>
					<p>The Technological University shall provide higher and advanced vocational, technical, industrial and professional education and training in the industries and technology, and practical arts leading to certificates, diplomas and degrees. It shaall provide progressive leadership in applied research developmental studies in technical, industrial, and technological fields and production using indigenous materials; effect technology transfer in the countryside; and assist in the development of small-and-medium scale indusrtries in identified growth centers. </p>
				</div>
			</section>

		<!-- Testimonials -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Inspiration</h2>
						<p>TUP is struggling to have an E-Learning Website that can teach or help the student to learn more in their chosen field or courses. Thus, the following TUP personnels are the reasons behind the making of this website.</p>
					</header>
					<div class="testimonials">
						<section>
							<div class="content">
								<blockquote>
									<p>Through your hard work, you have created a learning campus that can generate technologically erudite society. You are a survivor at all times and therefore, you have proven yourself worthy of recognitions and accolades. The achievements you have realized are remarkable. I’m deeply gratified to have the opportunity to serve with you. 
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url().'/assets/images/1.jpg';?>" alt="" />
									</div>
									<p class="credit">- <strong>Dr. Adora S. Pili</strong> <span>TUP President</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>First things first, as a user and a TUP faculty, it’s better if during account creation and or login, TUP-related ID information would be used as a username since this project should be exclusively available for TUP students and professors. For the password, a default one should suffice but immediate request for a password change should be implemented as to avoid account misuse issues.
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url().'/assets/images/sir-butch.jpg';?>" alt="" />
									</div>
									<p class="credit">- <strong>Mr. Renato Bituonan</strong> <span>Web Programming Professor</span></p>
								</div>
							</div>
						</section>
						<section>
							<div class="content">
								<blockquote>
									<p>As a professor, I want a site where I can provide lists of lectures and modules to the students so they can have advance readings about certain topics and we can have a smooth conversation inside the classroom. I also want a part of that website where I can give assignments, quizzes, and examinations so that we are not going to be late in the school calendar.
								</blockquote>
								<div class="author">
									<div class="image">
										<img src="<?php echo base_url().'/assets/images/mam-may.jpg';?>" alt="" />
									</div>
									<p class="credit">- <strong>Ma'am May Garcia</strong> <span>Software Engineering Professor</span></p>
								</div>
							</div>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>Intension</h3>
							<p>The TUP E-Learning Website is intended to initially improve the university’s learning environment by which would address some school-classroom constraints such as inability to access professor’s lecture files. Moreover, it aims to provide an online learning environment by which professor’s lecture files are available for reading/download all the time for the students. It provides a foundation that facilitates orderly growth for future enhancements.
						</section>
						<section>
							<h4>Important Features</h4>
							<ul class="alt">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Discussions</a></li>
								<li><a href="#">Modules</a></li>
								<li><a href="#">Achievements Board</a></li>
							</ul>
						</section>
						<section>
							<h4>contact Us</h4>
							<ul class="plain">
								<li><a href="https://twitter.com/TUPManila"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com/TUPian"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.google.com.ph/maps/place/Technological+University+Of+The+Philippines/@14.5873733,120.9817367,17z/data=!3m1!4b1!4m5!3m4!1s0x3397ca21ac302015:0x92dcca0f915010d9!8m2!3d14.5873733!4d120.9839254"><i class="icon fa-map-marker">&nbsp;</i>Address</a></li>
								<li><a href="http://www.tup.edu.ph/"><i class="icon fa-globe">&nbsp;</i>Website</a></li>
							</ul>
						</section>
					</div>
					<div class="copyright">
						 &copy; 2018. Technological University of the Philippines. All rights reserved.
						<p> Developed by Computer Science Students, TUP Manila.</p>
					</div>
				</div>
			</footer>

		<!-- Scripts -->


			<script src="<?php echo base_url().'/assets/js/jquery.min.js';?>"></script>
			<script src="<?php echo base_url().'/assets/js/browser.min.js';?>"></script>
			<script src="<?php echo base_url().'/assets/js/breakpoints.min.js';?>"></script>
			<script src="<?php echo base_url().'/assets/js/util.js';?>"></script>
			<script src="<?php echo base_url().'/assets/js/main.js';?>"></script>

	</body>
</html>

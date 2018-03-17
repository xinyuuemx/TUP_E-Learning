
<<<<<<< HEAD
<body class="is-preload">		
<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Classes</h2>
				<ul class="alt">
					<li>School Year 2017-2018</li>
					<li>Second Semester</li>
				</ul>
		</header>
		<div class="highlights">
=======
	<body class="is-preload">	
		<div class="main">
			<div class="inner">
				<header class="special">
					<h2>Classes</h2>
						<ul class="alt">
							<li>School Year 2017-2018</li>
							<li>Second Semester</li>
						</ul>
				</header>
				<div class="highlights">
>>>>>>> aeada7f434d92f503d5ab838254d56b468ed4c6c
					<section>
						<div class="content">
							<header>
<<<<<<< HEAD
								<div>
								<?php echo form_open('Student_dashboard/search_class'); ?>
									<icon class="icon fa-plus">
										<span class="label">Icon</span>
									</icon>
								</div>
								<input type="text" name="class_ID" placeholder="Type Here" required>
							</header><br>
						<ul class="actions">
						<li><button class="button primary">Add Class</button></li>
						</ul>
						</div>
						<?php echo form_close(); ?>	
					</section>
			<?php $x = 0;
			if(isset($code)){
				foreach($code as $data){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="#" class="icon fa-graduation-cap">
							<span class="label">Icon</span></a>
							<h3>'.$data.'</h3>
						</header>'.
						'<p>'.$description[$x].'</p>
						</div>
						</section>';
						$x = $x+1;
				}
			}
			else
				echo '<section><p>No classes</p></section>'
			?>
</div>	
</div>
=======
								<a href="#" class="icon fa-graduation-cap"><span class="label">Icon</span></a>
								<h3>';
							echo $data.'</h3>
										</header>';
							echo '<p>'.$description[$x].'</p>
							</div>
							</section>
							</div>';
							$x = $x+1;
						}
					?>
						
				
			<ul class="actions">
				<li><a href="#" class="button primary">Add Class</a></li>


>>>>>>> aeada7f434d92f503d5ab838254d56b468ed4c6c
</div>


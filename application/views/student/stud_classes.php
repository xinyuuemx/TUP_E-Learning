
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
					<section>
					<?php $x = 0;
					foreach($code as $data){
							echo'<div class="content">
							<header>
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


</div>
	 



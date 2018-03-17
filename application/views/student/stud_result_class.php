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
			<?php
			if(isset($subject_code)){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="#" class="icon fa-graduation-cap">
							<span class="label">Icon</span></a>
							<h3>'.$subject_code.'</h3>
						</header>'.
						'<p>'.$description.'</p>
						</div>
						</section>';
			}
			else
				echo '<section><p>No classes</p></section>'
			?>
</div>	
	<ul class="actions">
		<li><a href="#" class="button primary">Join Class</a></li>
	</ul>
</div>
</div>
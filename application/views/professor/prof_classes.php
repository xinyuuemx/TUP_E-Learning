
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
</div>

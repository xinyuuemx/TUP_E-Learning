 <div class="main">


 	<header class="special">
			<h2>Your Classes</h2>
				<ul class="alt">
	<?php $x = 0;
			if(isset($code)){
				echo ' <div class="highlights">';
				foreach($code as $data){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="';
							echo base_url('Prof_dashboard/view_class/'.$data).'" class="icon fa-graduation-cap">
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
				echo '<li>No Classes</li>
					</ul></header>'
			?>			
</div>
</div>
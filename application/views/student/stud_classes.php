
<body class="is-preload">
<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Classes</h2>
				
		</header>
		<div class="highlights">
			<?php $x = 0;
			if(isset($code)){
				foreach($code as $data){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="';
							echo base_url('Student_dashboard/view_class/'.$data).'" class="icon fa-graduation-cap">
							<span class="label">Icon</span></a>
							<h3>'.$data.'</h3>
						</header>'.
						'<p>'.$description[$x].'</p>
						<p>Prof. '.$name[$x].'</p>
						</div>
						</section>';
						$x = $x+1;
				}
			}
			else
				echo '
			<section>
					<div class="content">
					<header>
						<i class="icon fa-exclamation">
						<span class="label">Icon</span></i>
						<h3>Sorry</h3>
					</header>
					<p>No class available</p>
					</div>
				</section>'
			?>
</div>
</div>
</div>
</body>

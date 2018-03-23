
 
		<div class="main">
			<div class="inner">
				<header class="special">
					<h2><?php echo urldecode($code)?> Modules</h2>
						
				</header>
				<div class="highlights">
					<?php $x = 0;
			if(isset($topic_id)){
				foreach($topic_id as $data){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="'.base_url().'Student_dashboard/view_topic/'.$data.'/'.$file[$x].'" class="icon fa-graduation-cap"></a>
							<h3>'.$topic_id[$x].'</h3>
						</header>'.
						'<p>'.$description[$x].'</p>
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
					<p>No module available</p>
					</div>
				</section>'
			?>
	</div>
</div>
	 

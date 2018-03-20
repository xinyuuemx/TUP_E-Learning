
 
		<div class="main">
			<div class="inner">
				<header class="special">
					<h2>Modules</h2>
						<ul class="alt">
							<li>School Year 2017-2018</li>
							<li><?php echo urldecode($code)?></li>
						</ul>
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
				echo '<section><p>No Modules</p></section>'
			?>
	</div>
</div>
	 

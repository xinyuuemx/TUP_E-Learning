 <div class="main">
 <div class="highlights">
	<section>
		<div class="content">
			<header>
				<div class="icon fa-user-plus"><span class="label">Icon</span></div>
				<input type="text" name="title" placeholder="Type Here">
			</header><br>
			<h3>Add Class</h3>
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
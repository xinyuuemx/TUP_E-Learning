<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Modules</h2>
		</header>
		<?php echo '<font color="red">'.$error.'</font>'; ?>
		<?php echo form_open_multipart('Prof_dashboard/do_upload');?>
		<input class="button icon fa-plus" type="file" name="userfile" />
		<input class="button icon fa-plus" type="text" name="description" />
		<br /><br />
		<input class="button icon fa-plus" type="submit" value="upload" />
				<div class="highlights">
				<?php $x = 0;
			if(isset($topic_id)){
				foreach($topic_id as $data){
						echo'
						<section>
						<div class="content">
						<header>
							<a href="';
							echo base_url().'assets/files/'.$file[$x].'" class="icon fa-graduation-cap">
							<span class="label">Icon</span></a>
							<h3>'.$description[$x].'</h3>
						</header>
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
</div>	 

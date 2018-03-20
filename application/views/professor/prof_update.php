<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Edit</h2>
		</header>
		<div class="highlight">
			<?php echo form_open_multipart(base_url().'Prof_dashboard/edit_data');?>
			<h3>
				Class ID: <input type="text" name="class_id" value="<?php echo $class_id?>" readonly/>
			</h3>
			<h3>
				Topic ID: <input type="text" name="topic_id" value="<?php echo $topic_id?>" readonly/>
			</h3>
			<h3>
				File: <input type="file" name="file" />
			</h3>
			<h3>
				Description: <input type="text" name="description" value="<?php echo $description; ?>"/>
			</h3>
		<button class="button icon fa-edit" type="submit" value="upload" name="OK" />
		<?php echo form_close();?>
		</div>
	</div>
</div>	 
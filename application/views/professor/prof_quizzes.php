<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Quizzes</h2>
		</header>
		<?php echo '<font color="red">'.$error.'</font>'; ?>
		<?php echo form_open('Prof_dashboard/add_question/');?>
		<input href="<?php echo base_url().'Prof_dashboard/add_question/'?>" class="button icon fa-plus" type="submit" value="create question" />
		<?php echo form_close(); ?>



	</div>
</div>

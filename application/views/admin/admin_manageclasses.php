<div class="main">
	<div class="inner">
		<h2>Manage Classes</h2>
		<hr/>
		
		<a href="<?php echo base_url().'admin/manage_classes/create'?>" class="button large"><i class="icon fa-plus" style="">&nbsp;&nbsp;&nbsp;</i>Create New Class</a>
		
		<?php echo form_open('Prof_dashboard/login_validate'); ?>
		<form>
			<input type="text" name="name" placeholder="Search by Professor's ID, Class Code or Subject Code" />
			<input type="radio" id="bypid" name="radio" checked="checked" value="1">
			<label for="bypid">by Prof_ID</label>
			<input type="radio" id="bycc" name="radio" value="2">
			<label for="bycc">by Class Code</label>
			<input type="radio" id="bysc" name="radio" value="3">
			<label for="bysc">by Subject Code</label>
			<a href="<?php echo base_url().'admin/manage_classes/create'?>" class="button"><i class="icon fa-search">&nbsp;&nbsp;&nbsp;</i>Search</a>
		</form>
		<?php echo form_close(); ?>
	</div>    
</div>
	 



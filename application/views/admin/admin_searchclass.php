<div class="main">
	
		<h2>Manage Classes</h2>
		<hr/>
		
		<a href="<?php echo base_url().'admin/manage_classes/create'?>" class="button large"><i class="icon fa-plus" style="">&nbsp;&nbsp;&nbsp;</i>Create New Class</a>
		
		<?php //echo form_open('Admin_dashboard/searchClasses'); ?>
		<form>
			<input type="text" name="searchtext" placeholder="Search by Professor's ID, Class Code or Subject Code" />
			<input type="radio" id="bypid" name="radio" checked="checked" value="1">
			<label for="bypid">by Professor's ID</label>
			<input type="radio" id="bycc" name="radio" value="2">
			<label for="bycc">by Class ID</label>
			<input type="radio" id="bysc" name="radio" value="3">
			<label for="bysc">by Subject Code</label>
			<p class="button" type="submit"><i class="icon fa-search">&nbsp;&nbsp;&nbsp;</i>Search</p>
		</form>
		<?php //echo form_close(); ?>
		
		<div class="table-wrapper">
			<table class="alt" id="tbl">
				<thead>
					<tr>
						<th>CLASS ID</th>
						<th>CLASS DESCRIPTION</th>
						<th>PROFESSOR</th>						
					</tr>
				</thead>
				<tbody>	
					<tr>
						<td>CLASS ID</td>
						<td>CLASS DESCRIPTION</td>
						<td>PROFESSOR</td>						
					</tr>
				</tbody>	
			</table>
		</div>		   
</div>
	 



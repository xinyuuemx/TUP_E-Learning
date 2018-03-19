<?php echo form_open('Admin_dashboard/add_members'); ?>
<div class="main">
	<div class="inner">
		<div class="content">
			<h2>ADD STUDENTS</h2>
			<hr />
			<form class="login-form" method="post" action="<?php echo base_url() ?>csv/importcsv" enctype="multipart/form-data">
				<div class="row gtr-uniform">
					<div class="col-3 col-12-xsmall">
							<h4>STUDENTS</h4>
					</div>
					<div class="col-9 col-12-xsmall">
							<input type="file" name="studmem" required accept=".csv" />
							<input type="submit" value="upload" />
					</div>
				</div>
			</form>
	</div>
</div>
</div>
<?php echo form_close(); ?>

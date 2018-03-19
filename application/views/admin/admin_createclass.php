<?php echo form_open_multipart('Admin_dashboard/do_upload');?>
<div class="main">
	<div class="inner">
		<div class="content">
			<h2>CREATE NEW CLASS</h2>
			<hr />
				<form class="login-form">
					<div class="row gtr-uniform">
						<div class="col-3 col-12-xsmall">
							<h4>SUBJECT CODE:</h4>
						</div>
						<div class="col-9 col-12-xsmall">
							<input type="text" name="subcode" placeholder="subject code"  required />
							<?php if ($this->session->flashdata('error2')) { ?>
							    <div class="text-danger"> <?= $this->session->flashdata('error2') ?> </div>
							<?php } ?>
							<?php if ($this->session->flashdata('error4')) { ?>
							    <div class="text-danger"> <?= $this->session->flashdata('error4') ?> </div>
							<?php } ?>

						</div>
						<div class="col-3 col-12-xsmall">
							<h4>PROFESSOR ID:</h4>
						</div>
						<div class="col-9 col-12-xsmall">
							<input type="text" name="profid" placeholder="professor id"  required />
							<?php if ($this->session->flashdata('error3')) { ?>
							    <div class="text-danger"> <?= $this->session->flashdata('error3') ?> </div>
							<?php } ?>
							<?php if ($this->session->flashdata('error4')) { ?>
							    <div class="text-danger"> <?= $this->session->flashdata('error4') ?> </div>
							<?php } ?>
							<?php if ($this->session->flashdata('error')) { ?>
									<div class="text-danger"> <?= $this->session->flashdata('error') ?> </div>
							<?php } ?>
						</div>

						<div class="row gtr-uniform">
							<div class="col-3 col-12-xsmall">
									<h4>STUDENTS</h4>
							</div>
							<div class="col-9 col-12-xsmall">
									<input type="file" name="userfile" required accept=".csv" />
							</div>
						</div>

					</div>
						<button value="upload" style="width:20%; padding: 15px; margin-top:3%; float: right;">Add Students</button>
				</form>
		</div>
	</div>
</div>
<?php echo form_close(); ?>

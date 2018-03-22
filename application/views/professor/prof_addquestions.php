<?php echo form_open_multipart('Prof_dashboard/do_question');?>
<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Questions</h2>
		</header>

		<form class="login-form">
			<div class="row gtr-uniform">
				<div class="col-3 col-12-xsmall">
					<h4>SUBJECT CODE:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="subcode"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>QUESTION:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="question"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>CHOICE A:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="c1"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>CHOICE B:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="c2"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>CHOICE C:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="c3"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>CHOICE D:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="c4"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>ANSWER:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="answer"  required />
					<div class="text-danger"> <?= $this->session->flashdata('error') ?> </div>
				</div>


			</div>
				<button value="upload" style="width:20%; padding: 15px; margin-top:3%; float: right;">Add Question</button>
		</form>

	</div>
</div>
<?php echo form_close(); ?>

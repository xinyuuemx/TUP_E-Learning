<?php echo form_open_multipart('Prof_dashboard/do_question');?>
<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Quiz</h2>
		</header>

		<form class="login-form">
			<div class="row gtr-uniform">
				<div class="col-3 col-12-xsmall">
					<h4>CLASS ID:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="class"  required />
					<?php if ($this->session->flashdata('error')) { ?>
							<div class="text-danger"> <?= $this->session->flashdata('error') ?> </div>
					<?php } ?>
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>QUIZ DEADLINE:</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="date" name="qdead"  required />
				</div>

				<div class="col-3 col-12-xsmall">
					<h4>QUIZ DURATION (seconds):</h4>
				</div>
				<div class="col-9 col-12-xsmall">
					<input type="text" name="qdur"  required />
				</div>

				<?php if(isset($question_id)){?>
					<table class="alt" id="tbl">
						<thead>
		                    <tr>
								<th></th>
								<th>QUESTION ID</th>
								<th><b>QUESTION</b></th>
								<th>CHOICES</th>
								<th>ANSWER</th>
							</tr>
						</thead>
						<tbody>
		                    <?php foreach ($question_id as $infos){
													echo "<tr>".
													'<td><input type="checkbox" ></td>'.
			                    "<td>".$infos->Question_ID."</td>".
			                    "<td>".$infos->Question."</td>".
			                    "<td>".$infos->Choice1."<br/> ".$infos->Choice2."<br/> ".$infos->Choice3."<br/> ".$infos->Choice4."</td>".
			                    "<td>".$infos->Answer."</td>".
													"</tr>";

		                    } ?>
						</tbody>
					</table>

				<?php }
				else
					echo '<section><p>No Questions</p></section>'
				?>

			</div>
				<button value="upload" style="width:20%; padding: 15px; margin-top:3%; float: right;">Create Quiz</button>
		</form>

	</div>
</div>
<?php echo form_close(); ?>

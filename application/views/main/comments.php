<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet" id="bootstrap-css">
		<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h3>Comments</h3>
		</div><!-- /col-sm-12 -->
		</div><!-- /row -->
		<div class="row">
	<?php 
	$x = 0;
	foreach ($pic as $key) {
		echo '
		<div class="col-md-1">
		<div class="thumbnail">
		<img class="img-responsive user-photo" src="'.base_url().'assets/images/'.$key[0]['img_ID'].'">
		</div><!-- /thumbnail -->
		</div><!-- /col-sm-1 -->';
		echo '<div class="col-sm-5">
		<div class="panel panel-default">
		<div class="panel-heading">
		<strong>'.$account_id[$x]['Account_ID'].'<br />'.$name[$x].'</strong> 
		</div>
		<div class="panel-body">
		'.$account_id[$x]['Comment'].'
		</div><!-- /panel-body -->
		</div><!-- /panel panel-default -->
		</div><!-- /col-sm-5 -->
		';
		$x = $x + 1;
	}?>
		<div class="col-sm-6">
		<div class="panel panel-default">
		<div class="panel-heading">
		<strong>Enter your comment</strong> 
		</div>
		<div class="panel-body">
		<?php echo form_open(base_url().'comment/create/'.$account_id[0]['Topic_ID']);?>
		<input type="text" name="comment"/>
		<input class="button" type="submit" value="Comment"></button>
		</div><!-- /panel-body -->

		</div><!-- /panel panel-default -->
		</div>
		</div>
	</div>
	<?php $this->session->set_flashdata('location',uri_string());?>
</div>	 


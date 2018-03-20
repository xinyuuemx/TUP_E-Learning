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
		<div class="col-sm-1">
		<div class="thumbnail">
		<img class="img-responsive user-photo" src="'.base_url().'assets/images/'.$key[0]['img_ID'].'">
		</div><!-- /thumbnail -->
		</div><!-- /col-sm-1 -->';
		echo '<div class="col-sm-5">
		<div class="panel panel-default">
		<div class="panel-heading">
		<strong>'.$account_id[$x]['Account_ID'].'</strong> 
		</div>
		<div class="panel-body">
		'.$account_id[$x]['Comment'].'
		</div><!-- /panel-body -->
		</div><!-- /panel panel-default -->
		</div><!-- /col-sm-5 -->
		</div>
		';
		$x = $x + 1;
	}?>
	</div>
		</div>
</div>	 


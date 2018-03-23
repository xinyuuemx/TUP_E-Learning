<ul class="alt">
			<li><a 
			<?php if($scene==null)
				echo 'class="active"'
			?>
				href="<?php echo base_url().'student';?>">Dashboard</a></li>
			<li><a 
			<?php if($scene=='classes')echo 'class="active"'?>
				href="<?php echo base_url().'Student_dashboard/index/classes';?>">Classes</a></li>
			
			</ul>
		</div>	
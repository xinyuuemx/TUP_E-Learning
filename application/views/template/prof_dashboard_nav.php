<ul class="alt">
			<li><a
			<?php if($scene==null)
				echo 'class="active"'
			?>
				href="<?php echo base_url().'professor';?>">Dashboard</a></li>
			<li><a
			<?php if($scene=='classes')echo 'class="active"'?>
				href="<?php echo base_url().'Prof_dashboard/index/classes';?>">Classes</a></li>
			
			<li><a 
			<?php if($scene=='modules')echo 'class="active"'?>
				href="<?php echo base_url().'Prof_dashboard/index/modules';?>">Modules</a></li>
			</ul>
		</div>

<div class="main">
	<div class="inner">
	<header class="special">
			<h2>Manage Classes</h2>
				
		</header>
		
		<a href="<?php echo base_url().'admin/manage/create'?>" class="button large"><i class="icon fa-plus" style="">&nbsp;&nbsp;&nbsp;</i>Create New Class</a>
		

		
		<form action="<?php echo base_url().'admin/manage/search'?>" method="post">
			<input type="text" name="searchtext" placeholder="Search by Professor's ID, Class Code or Subject Code" />
			<input type="radio" id="bypid" name="radio" checked="checked" value="1">
			<label for="bypid">by Professor's ID</label>
			<input type="radio" id="bycc" name="radio" value="2">
			<label for="bycc">by Class ID</label>
			<input type="radio" id="bysc" name="radio" value="3">
			<label for="bysc">by Subject Code</label>
			<button class="button" type="submit" name="submit" ><i class="icon fa-search">&nbsp;&nbsp;&nbsp;</i>Search</button>
			<?php if(empty($message)){
					echo "<br />";
				  }else {echo $message; }?>

			<br />
			<?php echo $this->session->flashdata['error'];?>
			<br />
		</form>
		
		
		<div class="table-wrapper">
			<table class="alt" id="tbl">
				<thead>
                    <tr>
						<th>CLASS ID</th>
						<th><b>SUBJECT</b></th>
						<th>CLASS NAME</th>
						<th>PROF ID</th>						
						<th>PROFESSOR NAME</th>						
					</tr>
				</thead>
				<tbody>		
                                    <?php foreach ($info as $infos){
										echo "<tr>".
                                                "<td>".$infos->Class_ID."</td>".
                                                "<td>".$infos->Subject_code."</td>".
                                                "<td><a href=".current_url()."/view/".$infos->Class_ID.">".$infos->S_description."</a></td>".
                                                "<td>".$infos->Prof_ID."</td>".
                                                "<td>".$infos->L_name.", ".$infos->F_name." ".$infos->M_name.","."</td>".
											"</tr>";
                                                    
                                    } ?>
				</tbody>	
			</table>
                    <?php echo $this->pagination->create_links(); ?>
		</div>		 

</div>
	 



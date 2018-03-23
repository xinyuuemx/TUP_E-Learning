<div class="main">
	<div class="inner">
		<header class="special">
			<h2><?php echo urldecode($code);?> Modules</h2>
		</header>
		
		<h3> <b>Add Modules </b></h3>
		<?php echo '<font color="red">'.$error.'</font>'; ?>
		<?php echo form_open_multipart('Prof_dashboard/upload');?>
		
			<div>	
				<section>
				<div class="alert alert-danger">
                <input type="file" name="userfile" />	
                </div>	
				</section>
				</div>
				
				<div>
				<section>
				<input type="text" name="description" placeholder="Input Description"  />	
				</section>
			</div>
		<input class="button icon fa-plus" type="submit" value="upload" />
		<?php echo form_close(); ?>
		<br/>
		<h3> <b>List of Modules</b> </h3>
		<table>
			<thead>
				<tr>
						<th>Topic ID</th>
						<th>Class ID</th>
						<th>File</th>
						<th>Description</th>
						<th>Actions</th>
					</tr>
			</thead>
			<tbody>
				<?php $x = 0;
			if(isset($topic_id)){
				foreach($topic_id as $data){
						echo form_open('Prof_dashboard/update_topic/'.$data);
						echo'<tr>
						<td>'.$data.'
						</td>
						<td>'.$class_id.'
						</td>

						<td><a href="'.base_url().'Prof_dashboard/view_topic/'.$data.'/'.$file[$x].'" class="icon fa-file">
						'.$file[$x].'</a>
						</td>'.
						'<td>'.$description[$x].'</td>';
						echo '<td><a href="'.base_url().'Prof_dashboard/update_topic/'.$data.'" class="button icon fa-edit">EDIT</a>


							<a href="';
							echo base_url().'Prof_dashboard/delete/'.$data.'/'.$file[$x].'" class="button">Delete</a>
						</td>
						</tr>';
						$x = $x+1;
						echo form_close();
				}

			}
			else
				echo '<section><p>No Modules</p></section>'
			?>
			</tbody>
		</table>

	</div>
</div>

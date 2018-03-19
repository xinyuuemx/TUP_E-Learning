<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Modules</h2>
		</header>
		<?php echo '<font color="red">'.$error.'</font>'; ?>
		<?php echo form_open_multipart('Prof_dashboard/upload');?>
		<input class="button icon fa-plus" type="file" name="userfile" />
		<input class="button icon fa-plus" type="text" name="description" />
		<br /><br />
		<input class="button icon fa-plus" type="submit" value="upload" />
		<?php echo form_close(); ?>
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
						<td><input type="file" name="file"/><a href="';
							echo base_url().'assets/files/'.$file[$x].'" class="icon fa-graduation-cap">
						'.$file[$x].'</a>
						</td>'.
						'<td contenteditable="true"><input type="text" name="desc" value="'.$description[$x].'" /></td>';
						echo '<td><input type="submit" value ="Edit" class="icon fa-edit" />
						


							<a href="';
							echo base_url().'Prof_dashboard/delete/'.$data.'/'.$file[$x].'" class="button">Delete</a>
						</td>
						</tr>';
						$x = $x+1;
				}
					
			}
			else
				echo '<section><p>No Modules</p></section>'
			?>
			</tbody>
		</table>
	</div>
</div>	 

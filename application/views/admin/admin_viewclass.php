<div class="main">
	<div class="inner">
	<?php
		foreach($details as $detailss){
			echo '<h1 style="text-align:center;">'.$detailss->S_description.'<h1>'.
				 '<h2 style="text-align:center;">Class ID: '.$detailss->Class_ID.'</h2>'.
				 '<hr/>'.
				 '<h3>Professor ID: '.$detailss->Prof_ID.'</h3>'.
				 '<h3>Professor Name: '.$detailss->L_name.', '.$detailss->F_name.' '.$detailss->M_name.'.'.'</h3>';
		}
	?>			
		
			<div class="table-wrapper">
			<table class="alt" id="tbl">
				<thead>
                    <tr>
						<th>STUDENT ID</th>
						<th>NAME</th>					
					</tr>
				</thead>
				<tbody>	
                    <?php 
                    	foreach ($studs as $studss){
						echo "<tr>".
                                '<td>'.$studss->Student_ID.'</td>'.
                                '<td>'.$studss->L_name.", ".$studss->F_name." ".$studss->M_name.","."</td>".
                                '<td>'.'<a id="myBtn" class="button primary fit small" style="padding:0px; margin:0px;" 
                                		href='.current_url().'/'.$studss->Student_ID.">Remove</a>
                                		
                                </td>".
							"</tr>";
                                    
                    } ?>
				</tbody>	
			</table>
			
		</div>

</div>
	 
</div>


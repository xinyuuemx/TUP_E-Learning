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
                    <?php foreach ($studs as $studss){
						echo "<tr>".
                                "<td>".$studss->Student_ID."</td>".
                                "<td>".$studss->L_name.", ".$studss->F_name." ".$studss->M_name.","."</td>".
                                '<td>'.'<a id="myBtn" class="button primary fit small" style="padding:0px;margin:0px;"
                                		data-id="'.$studss->Student_ID.'"  data-name="'.$studss->Student_ID.'" >'.
                                		'Remove</a>'.  
                                	//'href="'.current_url().'/delete/'.$studss->Student_ID.'">Remove</a>'.
                                "</td>".
							"</tr>";
                                    
                    } ?>
				</tbody>	
			</table>
			<!-- The Modal -->
			<div id="myModal" class="modal" style="text-align: center;">

			  <!-- Modal content -->
			  <div class="modal-content" style="padding: 2%;">
			   		<p>Are you sure you want to delete this class member?</p>
			   		<a class="button" id="yes" href="">Confirm</a>
			   		<a class="button primary" id="close">Cancel</a>
			  </div>

			</div>
			<script>
			// Get the modal
			var modal = document.getElementById('myModal');

			// Get the button that opens the modal
			var btn = document.getElementById("myBtn");
			// Get the button that opens the modal
			var btn1 = document.getElementById("yes");

			// Get the <span> element that closes the modal
			var span = document.getElementById("close");

			// When the user clicks the button, open the modal 
			btn.onclick = function() {
			    modal.style.display = "block";
			}
			// When the user clicks the button, open the modal 
			btn1.onclick = function() {
			 	/*var str1="TUP_E-Learning/<?php echo $this->uri->segment(1).'/'.$this->uri->segment(2).'/'.$this->uri->segment(3).'/'.$this->uri->segment(4).'/'.$this->uri->segment(5)?>/"; 
				var str2=$(btn).attr("data-id");
				var str3=str1.concat(str2);
				var str4='/';
				btn1.href=str4.concat(str3);
				location.reload();*/
				var url = $("#url").val();
				var val = $("#value").val();
				$('#result').load(url,val);
   
			}

			// When the user clicks on <span> (x), close the modal
			span.onclick = function() {
			    modal.style.display = "none";
			}

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
			</script>

                    <?php echo $this->pagination->create_links(); ?>
		</div>		 

</div>
	 



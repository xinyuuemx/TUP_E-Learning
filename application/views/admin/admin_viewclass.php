<div class="main">
	<div class="inner">
	<?php
		foreach($details as $detailss){
			$prof=$detailss->Prof_ID;
			echo '<h1 style="text-align:center;">'.$detailss->S_description.'<h1>'.
				 '<h3 style="text-align:center;">Class ID: '.$detailss->Class_ID.'</h3>'.
				 '<hr/>'.
				 '<h3>PROFESSOR ID  :</h3><h2 data-id="'.$detailss->Prof_ID.'">'.$detailss->Prof_ID.'</h2>'.
				 '<h3>NAME: </h3><h2>'.$detailss->L_name.', '.$detailss->F_name.' '.$detailss->M_name.'.'.'</h2>';
		}
	?>
	<div class="row gtr-uniform">	
		<div class="col-6 col-12-xsmall">	 
			<a id="myBtn1" class="button" style="padding:auto; margin:auto;">Assign New Professor</a>
		</div>
	</div> 	
			<br/>

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
                                '<td>'.'<a id="myBtn" data-id="'.$studss->Student_ID.'" class="button primary fit small" style="padding:0px; margin:0px;">Remove</a>'. 
                                		//href='.current_url().'/'.$studss->Student_ID.">Remove</a>
                                		
                               " </td>".
							"</tr>";
                                    
                    } ?>
				</tbody>	
			</table>
			
		</div>

			<!-- The Modal -->
	<div id="myModal" class="modal">
	  <!-- Modal content -->
	  <div class="modal-content">
	    <?php echo 
	    	'<div style="margin-left:5%;" class="row gtr-uniform">'.
			 	'<div class="col-9 col-12-xsmall">'.
			 		'<br/>'.
			 		'<span style="font-size: 20px;">PROFESSOR ID</span>'.
			 			'<select class="form-control" id="proflist">';
			 				foreach($profs as $profss){ 
				            	echo '<option value="'.$profss->Prof_ID.'">'.$profss->Prof_ID.'</option>';
				            }
				            echo 
				        '</select>
				        <br/>
				        <a id="confirm" class="button" style="margin:auto;padding:auto;">CONFIRM</a>
				        <a id="myBtn2" class="button primary" style="margin:auto;padding:auto;">CANCEL</a>
				</div>
			</div>
			<br/>
			
			<br/><br/>'; 
		?>			
	  </div>
	</div>
	 

	 <script>
		// Get the modal
		var modal = document.getElementById('myModal');
		var val="";var msg="";var s7="";
		var s1="";var s4="";
		var s2="";var s5="";
		var s3="";var s6="";
		// Get the button that opens the modal
		var btn = document.getElementById("myBtn1");
		var btn2 = document.getElementById("myBtn2");
		var conf = document.getElementById("confirm");
		var del = document.getElementById("myBtn");
		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}
		del.onclick = function(){
			msg="Are you sure you want to remove this student from the class? ";
			val=$(this).attr("data-id");
			s4="Student ID: "
			s5=msg.concat(s4);
			s6=s5.concat(val);
			if(confirm(s6)){
				s1 = window.location.href;
				s2 ="/"
				s3=s1.concat(s2);
				s7=s3.concat(val);
				del.href=s7;
			}
			else{

			}
		}
		conf.onclick = function() {
			val = document.getElementById("proflist").value;
			s1 = window.location.href;
			s2 = "/assignprof/";
			s3=s1.concat(s2);
			conf.href=s3.concat(val);
			alert('Successfully assigned new professor.');
		}

		// When the user clicks on <span> (x), close the modal
		btn2.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</div>
</div>

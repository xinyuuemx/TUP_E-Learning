<div class="main">
	<div class="inner">
		<header class="special">
		<h2>CS 111 Students</h2>
		<p>School Year: 2017-2018</p>
		</header>
		<section>
		<header>
			<h3>List of Students</h3>
		</header>
		</section>
	<div>
		<table>
			<thead>
				<tr>
					<td>Student ID</td>
					<td>Full Name</td>
					<td>Course & Section</td>
					<td>Email</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($name as $key){
					 echo 
					 '<tr><td>'.$key[0]['Student_ID'].'</td>'.
					 '<td>'.$key[0]['L_name'].','.$key[0]['F_name'].' '.$key[0]['M_name'].'</td>'.
					 '<td>'.$key[0]['Course'].'-'.$key[0]['Section'].'</td>'.
					 '<td>'.$key[0]['E-mail'].'</td></tr>'
					 
					 ;}
				?>
			</tbody>
		</table>
	</div>
	</div>
</div>
<body class="is-preload">		
<div class="main">
	<div class="inner">
		<header class="special">
			<h2>Classes</h2>
				<ul class="alt">
					<li>School Year 2017-2018</li>
					<li>Second Semester</li>
				</ul>
		</header>
<?php echo form_open('Student_dashboard/search_class'); ?>
	<div class="highlights">
		<div class="form">
	    	<form class="login-form" method="get">
	      	<input type="text" placeholder="Class ID" name="class_ID" required />
	      	<button>Search</button>
	      	<?php echo "<p class='text-danger'>".$this->session->flashdata("error")."<p>"; ?>
	    	</form>
  		</div>
	</div>
	<?php echo form_close(); ?>
	<ul class="actions">
		<li><a href="#" class="button primary">Add Class</a></li>
	</ul>
</div>
</div>

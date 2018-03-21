<?php echo form_open('Student_dashboard/login_validate'); ?>
<div class="login-page">
<h1>Student</h1>
  <div class="form">
    <form class="login-form">
      <p style="margin-bottom:0px;">USERNAME</p>
	  <input type="text" placeholder="Username" name="uname" required />
      <p style="margin-bottom:0px;">PASSWORD</p>
	  <input type="password" placeholder="Password"name="psw" required />
      <button>login</button>
       <p class="message">Not a student? <a href="<?php echo base_url().'loginprof'?>">Login here</a></p>
	  <?php echo "<p class='text-danger'>".$this->session->flashdata("error")."<p>"; ?>
    </form>

  </div>
</div>
<?php echo form_close(); ?>

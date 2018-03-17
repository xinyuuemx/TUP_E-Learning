<?php echo form_open('Prof_dashboard/login_validate'); ?>
<div class="login-page">
<h1>Professor</h1>
  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="username" name="uname" required />
      <input type="password" placeholder="password" name="psw" required />
      <button>login</button>
       <p class="message">Not a professor? <a href="<?php echo base_url().'Login_controller'?>">Login here</a></p>
	  <?php echo "<p class='text-danger'>".$this->session->flashdata("error")."<p>"; ?>
    </form>
	
  </div>
</div>
<?php echo form_close(); ?>

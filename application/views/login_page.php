<?php echo form_open('Student_dashboard/login_validate'); ?>
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="username" name="uname" required />
      <input type="password" placeholder="password"name="psw" required />
      <button>login</button>
      <?php echo "<p class='text-danger'>".$this->session->flashdata("error")."<p>"; ?>
    </form>
  </div>
</div>
<?php echo form_close(); ?>

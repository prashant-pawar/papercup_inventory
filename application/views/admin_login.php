
<body>
  <div class="container">
    <div class="jumbotron">
     

        <form class="form-horizontal" method="post" action="<?php echo site_url('papercup_controller/admin_login_check') ?>">
<fieldset>

<!-- Form Name -->
<legend>Admin Login</legend>

<!-- Text input-->

<div class="form-group <?php if(form_error('textinput')) echo "has-error"?>">
  <label class="col-md-4 control-label" for="textinput ">username :</label>  
  <div class="col-md-4">
  <input  id="textinput" name="admin_username" type="text" placeholder="Enter admin id" class="form-control input-md">
  <?php echo form_error('admin_username');?>
  </div>
</div>




<!-- Password input-->
<div class="form-group <?php if(form_error('passwordinput')) echo "has-error"?>">
  <label class="col-md-4 control-label" for="passwordinput">password :</label>
  <div class="col-md-4">
    <input id="passwordinput" name="admin_password" type="password" placeholder="Enter Password" class="form-control input-md">
    <?php echo form_error('admin_password');?>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
 <div class="col-md-8">
    <button type="submit" name="submit" value="submit" class="btn btn-warning">Login</button>
  </div>
</div>
<div class="col-sm-8 text-danger"><?php echo $this->session->flashdata("error")?></div>
</fieldset>
</form>

      
    </div>
  </div>

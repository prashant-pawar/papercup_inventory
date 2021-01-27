
<body>
  <div class="container">
    <div class="jumbotron">
     

<form class="form-horizontal" method="POST" action="">
       
<fieldset>

<!-- Form Name -->
<legend>User Regestration</legend>

        <fieldset>
          
          <div class="form-group <?php if(form_error('name')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="name">Name &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="name" name="name" type="text" placeholder="Enter your name here" class="form-control input-md">
              <?php echo form_error('name');?>
            </div>
          </div><br>

          <!-- Text input-->
          <div class="form-group <?php if(form_error('username')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="username">Username &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="username" name="username" type="text" placeholder="Set your user name" class="form-control input-md">
              <?php echo form_error('username');?>
            </div>
          </div><br>

          <!-- Password input-->
          <div class="form-group <?php if(form_error('password')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="password">Password &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="password" name="password" type="password" placeholder="Set your password" class="form-control input-md">
              <?php echo form_error('password');?>
            </div>
          </div><br>

          <!-- Text input-->
          <div class="form-group <?php if(form_error('email')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="email">Email &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="email" name="email" type="text" placeholder="Set your email" class="form-control input-md">
              <?php echo form_error('email');?>
            </div>
          </div><br>

          <!-- Text input-->
          <div class="form-group <?php if(form_error('contact')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="contact">Contact &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="contact" name="contact" type="text" placeholder="Set your contact" class="form-control input-md">
              <?php echo form_error('contact');?>
            </div>
          </div><br>

          <!-- Text input-->
          <div class="form-group <?php if(form_error('address')) echo "has-error"?>">
            <label class="col-sm-4 control-label" for="address">Address &nbsp;&nbsp;:</label>
            <div class="col-sm-4">
              <input id="address" name="address" type="text" placeholder="Enter your address" class="form-control input-md">
              <?php echo form_error('address');?>
            </div>
          </div>
        
          <br>

          <div class="form-group">
            <div class="col-md-12">
              <center>
                <button type=submit name="submit" value="submit" class="btn btn-warning btn-lg">Submit</button>&nbsp;&nbsp;
              </center>
            </div>
          </div>
            
        </fieldset>
      </form>
      
    </div>
  </div>

<!DOCTYPE html>
<html>
  <head>
    <title>SIM AKADEMIK VER 0.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
     <style>
		.btn-file {
		    position: relative;
		    overflow: hidden;
		}
		.btn-file input[type=file] {
		    position: absolute;
		    top: 0;
		    right: 0;
		    min-width: 100%;
		    min-height: 100%;
		    font-size: 999px;
		    text-align: right;
		    filter: alpha(opacity=0);
		    opacity: 0;
		    background: red;
		    cursor: inherit;
		    display: block;
		}
		input[readonly] {
			background-color: white !important;
			cursor: text !important;
		}

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 100%;
  padding: 2% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 30px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input.btn-success{
 background: #43A047;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
.captcha{
  float: left;
  width: 40%;
}
.input-captcha{
  float: left;
  width: 60%;
}

.input-captcha input{
  height: 37px;
}
	</style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- <nav class="navbar navbar-default" role="navigation">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>

 
</nav> -->
        <div class="text-center">
            <img src="<?php echo base_url();?>assets/images/stkesosi_logo.jpg" width="400">
        </div>
        <div class="login-page">
          <div class="form">
            <?php
              // echo form_open('auth/login', array());
            echo form_open('auth/login', array(
                'class' => 'login-form'
            ))
            ?>            
              <div class="form-group">
                <input type="text" name="username" required="" placeholder="Username ..." autofocus="" >
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Password" required="" >
              </div>
              <div>
                <span class="captcha"><?php echo $image;?></span>
                <span class="input-captcha"><input type="text" name="kode_aman" placeholder="Masukan Captcha" required="" ></span>
              </div>
              
              <input type="submit" name="submit" value="Login" class="btn btn-success">
              
            </form>
          </div>
        </div>

      <!-- <div class="container">
          <div class="text-center">
            <img src="<?php echo base_url();?>assets/images/stkesosi_logo.jpg">
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-5">
              <?php
              echo form_open('auth/login');
              ?>
              <table class="table table-bordered">
              <tr><td>Username</td><td>  
                      <div class="input-group">
                          <input type="text" name="username" required="" placeholder="Username ..." autofocus="" class="form-control">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  </div></td></tr>
              <tr><td>Password</td><td> <div class="input-group">
                          <input type="password" name="password" placeholder="Password" required="" class="form-control">
  <span class="input-group-addon"><i class="fa fa-keyboard-o"></i></span>
</div></td></tr>
              <tr><td></td><Td><?php echo $image;?>
                      <div class="col-md-8">
                          <input type="text" name="kode_aman" placeholder="Masukan Kode Keamanan" required="" class="form-control"></div>
                  </td></tr>
              <tr><td></td><td> </td></tr>
              <tr><td></td><td><input type="submit" name="submit" value="Login" class="btn btn-danger"></td></tr>
          </table>   
          </form>
          </div>    
           <div class="col-md-3"></div>
           
      </div> -->
      
      <hr>
      <p align="center">SISTEM INFORMASI AKADEMIK STIKES KESOSI </p>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets/js/1.8.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/icon.jpg">
    	<link rel="stylesheet" href="<?php echo base_url();?>assets/themes/base/jquery.ui.all.css">
	<script src="<?php echo base_url();?>assets/js/jquery-1.9.1.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.core.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.widget.js"></script>
	<script src="<?php echo base_url();?>assets/ui/jquery.ui.datepicker.js"></script>
	
        	<script>
	$(function() {
		$( "#datepicker" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true
                });

                $( "#datepicker1" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true
                });

                $( "#datepicker2" ).datepicker({
                changeMonth: true,
                dateFormat: 'yy-mm-dd',
                changeYear: true
                });
	});
	</script>
  </body>
</html>
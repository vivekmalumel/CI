<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/mat_icons.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin_style.css') ?>">

</head>
<body id="admin_login_body">
	<div class="container">

       <div class="form_block col-md-6" align="center">
        <i class="material-icons">account_circle</i>
                   <!--  <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg"> -->
        
		<?php 
        $attributes=array('id' => 'admin_login');

        echo form_open('admin/login', $attributes) ?>
		                <div class="form-body">
				    		<div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Type your username and password.</span>
                            </div>
                            <div class="form-group">
				    		<input id="login_username" name="username" class="form-control" type="text" placeholder="Username" required>
                            </div>
                            <div class="form-group">
				    		<input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
                            </div>
        		    	</div>
				        <div class="form">
                                
                                <div class="error_msg">
                                    <strong><?php echo $error;?></strong>
                                </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    <?php echo form_close(); ?>
                </div>
	</div>
</body>
</html>
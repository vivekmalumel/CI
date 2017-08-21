<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/mat_icons.css') ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/admin_style.css') ?>">
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min .js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/admin_custom.js') ?>"></script>

</head>
<body>
	<div class="admin_header_bar row container-fluid">
		<div class="admin_left_header_bar col-md-8 col-xs-8">
			<a href="<?php echo base_url()?>"> <span class="material-icons">home</span>CI Learn</a>
		</div>
		<div class="admin_right_header_bar col-md-4 col-xs-4">
		<?php echo anchor('./admin/logout','Logout',array('class' => 'logout_link')); ?>
		</div>
	</div>
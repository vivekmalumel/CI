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
<?php $this->load->view('admin/admin_script'); ?>

</head>
<body>
	<div class="admin_header_bar row container-fluid">
		<div class="admin_left_header_bar col-md-8 col-8">
			<a href="<?php echo base_url()?>"> <span class="material-icons">home</span>CI Learn</a>
		</div>
		<div class="admin_right_header_bar col-md-4 col-4">
		<?php echo anchor('./admin/logout','Logout',array('class' => 'logout_link')); ?>
		</div>
		<div id="nav-icon3">
		  <span></span>
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
</div>
<script>
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$('.admin_side_bar').toggleClass('show_sidebar');
		$(this).toggleClass('move_humberger');
		$('.page_content').toggleClass('move_right');
	});
</script>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<div class="img_block">Uploaded Image Thumbnail <img src="<?php echo base_url().'uploads/thumb/'.$upload_data['file_name'] ?>"> </div>

<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>

</body>
</html>
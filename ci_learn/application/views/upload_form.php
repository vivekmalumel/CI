<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
<title>Upload Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php echo $error;?>
<?php $attribute=array('class' => 'form-horizontal'); ?>
<?php echo form_open_multipart('upload/do_upload',$attribute);?>
<div class="form_group">
<div class="col-sm-2">
<label for="userfile" class="control-label ">Upload File:</label>
</div>
<div class="col-sm-10">
<input type="file" class="form-control'" name="userfile" id="userfile" size="20" />
</div>
</div>
<div class="form_group">
<input type="submit" class="btn btn-default" value="upload" />
</div>

</form>

</body>
</html>
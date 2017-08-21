<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/admin_header');
$this->load->view('admin/admin_sidebar');
?>
<div class="page_content">
<div class="post_title">Add Slider</div>
	<div class="slider-form-block">
		<?php echo form_open('admin/add-slider') ?>
		<div class="form-elements col-md-8 col-xs-12">
			<div class="form_group">
				<label for="title">Title</label>
				<input class="form-control" type="text" name="title" id="title" placeholder="Enter Title">
			</div>

			<div class="form_group">
				<label for="description">Description</label>
				<textarea class="form-control"  name="description" rows='5'>
				</textarea>
			</div>
			<div class="form_group">
				<label for="title">Slider Image</label>
				<div class="slider-image-block">
				</div>
				<a class="set-slider-image">Set Slider Image</a>
			</div>
		</div>

		<?php echo form_close(); ?>
	</div>
</div>



	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			
			<div class="modal-content bmd-modalContent">
				<div class="modal-header">
				<h4 class="modal-title">Select Image</h4>
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
       			 
      			</div>

				<div class="modal-body">
					<?php $attribute=array('id'=>'upload_form') ?>
					<?php echo form_open_multipart('admin/do_upload',$attribute);?>
					<div class="form_group">
					<div class="col-sm-2">
					<label for="userfile" class="control-label ">Upload File:</label>
					</div>
					<div class="col-sm-10">
					<input type="file" class="form-control'" name="userfile" id="userfile" size="20" />
					</div>
					</div>
					<?php echo form_close()?>

         		</div>
          </div>
         </div>
   </div>
</body>
</html>
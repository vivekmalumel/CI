<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/admin_header');
$this->load->view('admin/admin_sidebar');
?>
<div class="page_content">
<div class="post_title">Add Slider</div>
	<div class="slider-form-block">
		<?php echo form_open('admin/addSlider') ?>
		<div class="form-elements col-md-8 col-xs-12">
			<div class="form_group">
				<label for="title">Title</label>
				<input class="form-control" type="text" name="title" id="title" placeholder="Enter Title" value="<?php echo set_value('title'); ?>">
				<span class="text-danger"><?php echo form_error('title'); ?></span>
			</div>

			<div class="form_group">
				<label for="description">Description</label>
				<textarea class="form-control"  name="description" rows='5'><?php echo set_value('description'); ?></textarea>
			</div>
			<div class="form_group">
				<label for="title">Slider Image</label>
				<div class="slider-image-block">
				<?php
					if(set_value('media-id')){
				?>
					<img src="<?php echo getThumbUrl(set_value('media-id')) ?>" class="img-responsive">
				<?php
				}
				 else{
				 	?>
					<img src="<?php echo base_url('assets/images/noimg.png') ?>" class="img-responsive">
				<?php } ?>
					<input type="hidden" name="media-id" value="<?php echo set_value('media-id') ?>">
				</div>
				<a class="set-slider-image">Set Slider Image</a>
			</div>
			<div class="form_group">
				<input type="submit" class="btn btn-primary" id="publish" value="Publish"/>
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
					<?php getImageSelector() ?>
					<button id="select_btn" class="btn btn-primary">Select</button>
					<?php $attribute=array('id'=>'upload_form') ?>
					<?php echo form_open_multipart("",$attribute);?>
					<div class="form_group">
					<div class="col-md-12">
					<h5>OR</h5>
					<h6>Upload New Image</h6>
					</div>
					<div class="col-sm-10">
					<label for="modal-upload" class="btn btn-primary">Upload Image
					<input type="file" class="form-control'" name="file" id="modal-upload" style="visibility:hidden;position: absolute" />
					</label>
					</div>
					</div>
					<?php echo form_close()?>



         		</div>
          </div>
         </div>
   </div>
</body>
</html>

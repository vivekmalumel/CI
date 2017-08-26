<script>
$(document).ready(function(){
        $('#modal-upload').change( function () {
                    var file_data = $(this).prop('files')[0];
                    var form_data = new FormData();
                    form_data.append('file', file_data);
                    $.ajax({
                        url: '<?php echo base_url()?>ajax/upload_file', // point to server-side controller method
                        dataType: 'text', // what to expect back from the server
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: form_data,
                        type: 'post',
                        dataType: 'json',
                        success: function (response) {
                        	if(!response.uploadSuccess){
                        		$('#myModal .modal-body').prepend('<div class="alert alert-danger">'+response.msg+'</div>')
                        	}
                        	else{
                        		 $('#myModal').modal('toggle');
                        		$('.slider-image-block').html(response.html);
                        	}
                        },
                        error: function (response) {
                            $('#msg').html(response); // display error response from the server
                        }
                    });
         });


        $('button#select_btn').click(function(){

				var image_id=$("input[name='image_id']:checked"). val();
				$.ajax({
					url: '<?php echo base_url()?>ajax/set_image',
					type: 'post',
					data: {imageID:image_id},
					dataType: 'json',
					success:function(response){
						$('#myModal').modal('toggle');
                        $('.slider-image-block').html(response.html);

					},
				});

		});
});
</script>
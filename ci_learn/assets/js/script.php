<script>

$(document).ready(function(){
	$('#modal-upload').change(function(){

		$.ajax({
			url:"<?php echo base_url(); ?>",
			success:function(result){
				alert(success);
			}
		});
	});
});

</script>
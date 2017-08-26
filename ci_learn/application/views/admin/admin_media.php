<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('admin/admin_header');
$this->load->view('admin/admin_sidebar');
?>
<div class="page_content">
	<div class="post_title">Manage Media</div>
	<div class="media_inner container">
	<?php getImageSelector()?>
	</div>
</div>

</body>
</html>
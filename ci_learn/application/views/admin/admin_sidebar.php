<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="admin_side_bar">
	<ul class="admin_menu">
		<li class="menu_item <?php if($page==='') echo 'active'; ?>" id="home">
			<a href="<?php echo base_url('admin')?>">
			<span class="material-icons">dashboard</span>Dashboard
			</a>
		</li>
		<li class="menu_item <?php if($page === 'posts') echo 'active';?>" id="posts">
			<a  href="<?php echo base_url('admin/page/posts')?>">
			<span class="material-icons">book</span>Posts
			</a>
			<ul class="submenu hidden">
				<li class="menu_item">
					<a href="#">All Items</a>
				</li>
				<li class="menu_item">
					<a href="#">Add New</a>
				</li>
				<li class="menu_item">
					<a href="#">Categories</a>
				</li>
			</ul>
		</li>

		<li class="menu_item <?php if($page === 'slider') echo 'active';?> " id="slider">
			<a  href="<?php echo base_url('admin/page/slider')?>">
			<span class="material-icons">perm_media</span>Slider
			</a>
			<ul class="submenu hidden">
				<li class="menu_item">
					<a href="#">All Items</a>
				</li>
				<li class="menu_item">
					<a href="#">Add New</a>
				</li>
				<li class="menu_item">
					<a href="#">Categories</a>
				</li>
			</ul>
		</li>
		<li class="menu_item <?php if($page === 'media') echo 'active';?> " id="media">
		<a  href="<?php echo base_url('admin/page/media')?>">
			<span class="material-icons">image</span>Media
		</a>
		</li>

	</ul>
</div>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/* function anchor($link,$text){

 	echo "<a href='".$link."'>".$text."</a>";
 }*/
 function getImageUrl($id){

 	$CI =& get_instance();
	$CI->load->database();
 	$sql="SELECT * FROM media WHERE id=?";
 	$query = $CI->db->query($sql,array($id));
 	$row=$query->first_row();
 	return base_url().$row->image;

 }
 function getThumbUrl($id){

 	$CI =& get_instance();
	$CI->load->database();
 	$sql="SELECT * FROM media WHERE id=?";
 	$query = $CI->db->query($sql,array($id));
 	$row=$query->first_row();
 	return base_url().$row->thumb;

 }

 function getImageSelector(){
 	$CI =& get_instance();
	$CI->load->database();
	$query=$CI->db->get('media');
	echo '<div class="image_selector-container">';
	if($num = $query->num_rows()){
		
		foreach($query->result() as $row){

			echo '<label class="img-select"><input name="image_id" type="radio" value="'.$row->id.'"/><img class="img-responsive" src="'.base_url().$row->thumb.'"></label>';
		}
		
	}
	else{
		echo '<div class="no_img_msg" style="text-align:center">No Images Found</div>';
	}

	echo'</div>';	

 }
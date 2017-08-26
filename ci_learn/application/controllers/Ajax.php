<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ajax extends CI_Controller{


	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('url','form','helper1'));
		$this->load->database();
	}

 	function upload_file(){

 	$uploadSuccess=false;
 	$msg="";
 	$html="";
 	$config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'jpg|gif|png';
        $config['max_filename'] = '0';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '0'; //1 MB
 
        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                    $this->load->library('upload', $config);
                    if (!$this->upload->do_upload('file')) {
                        $msg=$this->upload->display_errors();
                    } 
                    else {

                    	$data['upload_data']=$this->upload->data();
     					$config['image_library'] = 'gd2';
				 		$config['source_image']  = $this->upload->data('full_path');
				 		$config['create_thumb']  = TRUE;
				 		$config['maintain_ratio']= TRUE;
						$config['width']         = 300;
						$config['height']        = 200;
						$config['thumb_marker']  = '';
						$config['new_image']     = './uploads/thumb/';


            			$this->load->library('image_lib', $config);

						if (!$this->image_lib->resize()){
							unlink($config['source_image']);
							$error=array( 'error' => $this->image_lib->display_errors('<p>', '</p>') );
							//$this->load->view('upload_form', $error);
							$msg=$this->image_lib->display_errors('<p>', '</p>');
						}
						else{
							$data=array(
								'image'	=> 'uploads/'.$this->upload->data('file_name'),
								'thumb'	=> 'uploads/thumb/'.$this->upload->data('file_name'),

							);

							$this->db->insert('media', $data);
							$img_id=$this->db->insert_id();
							$html='<img class="img-responsive" src="'.getThumbUrl($img_id).'">';
							$html.='<input type="hidden" name="media-id" value="'.$img_id.'">';
                        	$uploadSuccess=true;
                    	}
                    }
                
            }
        } else {
            $msg='Please choose a file';
        }

        echo json_encode(array('msg' => $msg,'uploadSuccess' => $uploadSuccess,'html' => $html ));
    }



    function set_image(){

    	$imageID=$this->input->post('imageID');
    	$thumb=getThumbUrl($imageID);
    	$html='<img class="img-responsive" src="'.$thumb.'">';
		$html.='<input type="hidden" name="media-id" value="'.$imageID.'">';
		echo json_encode(array('html' => $html));


    }

}
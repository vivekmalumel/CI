<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form','url'));

	}

	public function index(){

		$this->load->view('upload_form',array('error' => '' ));
	}

	public function do_upload(){

		$config['upload_path']= './uploads/';
		$config['allowed_types']='jpg|gif|png';
		$config['max_size']= 0;
		$config['max_width']= 0;
        $config['max_height']= 0;
        $config['encrypt_name']= true;

        $this->load->library('upload', $config);

	 if ( ! $this->upload->do_upload('userfile'))
     {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
     }
     else
     {

     		$data['upload_data']=$this->upload->data();
     		$config['image_library'] = 'gd2';
     		$config['source_image']  = $this->upload->data('full_path');
     		$config['create_thumb']  = TRUE;
     		$config['maintain_ratio']= TRUE;
			$config['width']         = 150;
			$config['height']        = 100;
			$config['thumb_marker']  = '';
			$config['new_image']     = './uploads/thumb/';


            $this->load->library('image_lib', $config);

			if (!$this->image_lib->resize()){
				unlink($config['source_image']);
				$error=array( 'error' => $this->image_lib->display_errors('<p>', '</p>') );
				$this->load->view('upload_form', $error);
			}
			else{

          // $data['thumb']= array('upload_data' => $this->image_lib->data());

            //print_r($data);die(0);

            $this->load->view('upload_success', $data);
           }
     }
 	}



}
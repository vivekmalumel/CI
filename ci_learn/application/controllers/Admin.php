<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
		$this->load->helper(array('url','form'));
		$this->load->database();
	}
	public function index(){
		//print_r($this->session->userdata('logged_in'));die();
		if($this->session->userdata('logged_in') && $this->session->userdata('level')== 1 )
			$this->load->view('admin/admin_home',array('page' => ''));
		else
			$this->load->view('admin/login_form',array('error' => '' ));
	}

	public  function login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$sql="SELECT * FROM users WHERE uname=? AND password=? AND level=?";
		if ( !$query=$this->db->query($sql,array($username,$password,1)))
		{
			$this->load->view('admin/login_form',array('error' => $this->db->error()));
		}
		else{

			if(empty($query->result()))
				$this->load->view('admin/login_form',array('error' => 'Inavalid Username Or Password'));
			else{

					$row=$query->row();
					$newdata = array(
        							'username'  =>$row->uname,
        							'email'     =>$row->email,
        							'level'		=>$row->level,
        							'logged_in' => TRUE );
					$this->session->set_userdata($newdata);
							
					redirect('/admin');
				}
			}
	}

	public function page($title){
		if($this->session->userdata('logged_in') && $this->session->userdata('level')== 1 ){

		switch($title){

			case 'posts':
					$this->load->view('admin/admin_post',array('page'=> $title));
					break;
			case 'slider':
					$this->load->view('admin/admin_slider',array('page'=> $title));
					break;
			default:
					$this->load->view('admin/admin_home',array('page' => ''));
		}
		}
		else
			$this->load->view('admin/login_form',array('error' => '' ));

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('/admin');
	}


}
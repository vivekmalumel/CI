<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->driver('test_driver');
	}

	public function index(){
		echo "Index";
		echo anchor('blog/comments', 'Click Here');
		$this->test_driver->second_driver->index();
	}

	public function show()
	{
		//$this->load->view('welcome_message');
		echo "Hello .. Welcome!<br>";
		$query = $this->db->query('SELECT name, age, email FROM users');

		foreach ($query->result() as $row) {
			echo "Name : ".$row->name."  Age : ".$row->age." Email : ".$row->email."<br>";
		}
	}

	public function args($name,$age){

		echo "Name : ".$name."  age : ".$age."<br>";
	}

	public function add($x,$y){

		 echo $x+$y;
	}



/*	public function _remap($method)
	{
        if ($method === 'show')
        {
                $this->$method();
        }
        else
        {
                $this->index();
        }
	}*/

}

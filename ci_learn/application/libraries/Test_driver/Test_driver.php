<?php defined('BASEPATH') OR exit('No direct script access allowed');
  class Test_driver extends CI_Driver_Library 
 { 
    function __construct()
    {
        $this->valid_drivers = array('first_driver','second_driver');
     }
     function index(){
     	echo "<h1>This Is The Parent Driver</h1>";
     }
 }
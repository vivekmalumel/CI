<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Test_driver_second_driver extends CI_Driver 
    {
         public function index() 
         { 
             echo "Hello world! Second Driver"; 
         } 
    }
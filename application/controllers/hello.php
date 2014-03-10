<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Hello extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			echo "This is initiallisation <br/>"; 
		}
		public function one($name)
		{
			//echo "this is First one";
			$this->load->model('hello_model');
			$profile=$this->hello_model->getProfile("pratik");
			print_r($profile);
			$data=array("name"=>$name);
			$this->load->view('one',$data);
		}
		public function two($p1,$p2)
		{
			echo "this one is with 2 parameter";
			echo "<br> $p1 and $p2";
		}
		public function index()
		{
			echo "This is index function";
		}
	}
?>
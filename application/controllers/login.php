<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Login extends CI_Controller
	{
		public function index()
		{
			$this->load->view('login');
			$this->load->model('check_model');
			$this->load->library('session');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if(!empty($username) && !empty($password)):
				$verify=$this->check_model->logincheck($username,$password);
				if($verify){
					$user = $this->session->userdata;
					//print_r($user);exit;
					 if($user['parent_id']==0)
					 {
						redirect('admin/checkme');
					 }
					 else
					 {
						redirect('user');
					 }
				
					
					
				}
				else
				{
					$this->load->helper('url');
					redirect('login');
					
				}
				
			endif;	
		}
		
	}
	
?>
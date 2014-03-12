<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Admin extends CI_Controller
	{
		public function checkme()
		{
			if(isLoggedIn)
			{
			$this->load->helper('url');
					redirect('csvcontroller/upload_csv');
			}		
		}
		public function task_status()
		{
			$get_date=$this->input->post('get_date');
			$date= date('Y-m-d');
			$data['clients']=$this->user_model->getClients();
	     	$this->load->view('admin/task_status_view',$data);	
	
		}
		public function get_task_status()
		{
			$clientId=$this->input->post('clientid');
			$data['clients']=$this->user_model->getClients();
			$data['get_task']=$this->user_model->show_task_upto($clientId);
			$data['clientid']=$clientId;
     		$this->load->view('admin/task_status_view',$data);	
		}
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
		public function report()
		{
			$data['get_report']=$this->user_model->show_report();
			$this->load->view('admin/report_view',$data);
			}
			
		public function update_task_status($task_id,$status_val)
		{
			$result=$this->user_model->get_admin_user_response($task_id,$status_val);
			return 'success';
		}
		
}
	
?>
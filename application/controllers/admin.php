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
			
			$this->load->view('admin/task_status_view');
		}
		public function get_task_status()
		{
			$get_date=$this->input->post('get_date');
			$date= date('Y-m-d', strtotime(str_replace('.', '/', $get_date)));
			$this->user_model->show_task_upto($date);
			$data['get_task']=$this->user_model->show_task_upto($date);
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
		
}
	
?>
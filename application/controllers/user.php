<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User extends CI_Controller
	{		
		public function __construct()
   {
        parent::__construct();
        if(!$this->session->userdata('id'))    
        {
        	redirect("login");
        }
        // Your own constructor code
   }
		
		public function index()
		{
			  $uset_data=$this->user_model->get_task_info();
			  //print_r($data);exit;	
			  $data['uset_data']=$uset_data;
				$this->load->view('user_view',$data);
		}
		
		public function update_task_status($task_id,$comment,$task_status)
		{
			$closing_date= date('Y-m-d H:i:s');
			//echo $closing_date;exit;
			$result=$this->user_model->get_user_response($task_id,$closing_date,$comment,$task_status);
			return 'success';
		}
		
		public function user_response()
		{
			$closing_date= $this->input->post('task_close_date');
			$comment=$this->input->post('user_comment');
			$status=$this->input->post('status');
			$id=$this->input->post('id');
			$result=$this->user_model->get_user_response($id,$closing_date,$comment,$status);
			if($result)
			{
				redirect(user);
			}
			}
		
		public function logout()
		{
			$this->session->sess_destroy();
			redirect('login');
		}
		
		public function get_done_task()
		{
			$tasks=$this->user_model->get_done_task();
			print_r($tasks);
		}
		
		
		
		
	}
	
?>
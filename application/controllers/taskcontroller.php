<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Taskcontroller extends CI_Controller
{
	   public function __construct()
       {
            parent::__construct();
            //print_r($this->session->all_userdata());exit;
            //$this->session->sess_destroy();
            if(!$this->session->userdata('id'))    
            {
            	redirect("login");
            }
            // Your own constructor code
       }
	
	
		public function task_assign()
     {
     			//$this->load->model('user_model');	 
     			$data['getuser']=$this->user_model->user_info();
     			$data['gettask']=$this->user_model->task_info();
     			$this->load->view('admin/assign_task',$data);	
     }
     public function process_task()
     {
 				$userid=$this->input->post('getuserid');
				$get_task_id=$this->input->post('add');		
				//echo $userid.'=====';print_r($get_task_id);exit;
				$check=$this->user_model->give_user_task($userid,$get_task_id);
				redirect("taskcontroller/task_assign");
		 }
		 
}
	
?>
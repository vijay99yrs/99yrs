<?php	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Check_model extends CI_Model
	{	
		public function logincheck($username , $password)
		{
			$this->load->database();
			$this->load->library('session');
			$password=md5($password);
			$result = $this->db->query("SELECT * FROM 99yrs_user where user_name='$username' AND password='$password'");
			$count=$result->num_rows();
			if($count==1){
				$user = $result->row_array();
				//print_r($user);exit;
				$this->session->set_userdata($user);
				//print_r($this->session->all_userdata());exit;
				return true;
			}else{
				return false;
			}
		}
		public function isLoggedIn()
		{
			$loggedin_username=$this->session->userdata("username");
				if($loggedin_username)
				{
					return true;	
				}			
				else
				{
					return false;
				}
		}
	}
?>
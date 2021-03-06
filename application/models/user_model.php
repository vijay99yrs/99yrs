<?php	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_Model
	{	
		public function user_info()
		{
			$getuser=$this->db->query('select * from 99yrs_user where parent_id!=0');
     			return $getuser->result();
		}
		public function task_info()
		{
			//$gettask=$this->db->query('SELECT * FROM 99yrs_task WHERE user_to = 0');
			$gettask=$this->db->query('SELECT 99yrs_task_assign.task_id , 99yrs_task_assign.target_date, 99yrs_task.name,99yrs_client.client_name FROM 99yrs_task_assign LEFT JOIN 99yrs_task on 99yrs_task_assign.task_id =99yrs_task.id LEFT JOIN 99yrs_client on 99yrs_client.id=99yrs_task_assign.client_id WHERE 99yrs_task_assign.use_id = 0');
     			return $gettask->result();
		}
		public function give_user_task($userid,$get_task_id)
		{
				$current_date=date('Y-m-d H:i:s');
				$task_id=implode(',',$get_task_id);
				
				$update_task_table=" UPDATE 99yrs_task_assign SET use_id=$userid, date_created='$current_date' WHERE id IN($task_id)";
				$this->db->query($update_task_table);
				$get_task_info_sql="SELECT 99yrs_user.id, 99yrs_user.user_email, 99yrs_user.full_name ,99yrs_task_assign.task_id,99yrs_task_assign.task_value,99yrs_task_assign.target_date FROM 99yrs_task_assign LEFT JOIN 99yrs_user ON 99yrs_task_assign.use_id = 99yrs_user.id WHERE 99yrs_task_assign.task_id IN ($task_id )";
				$get_task_info_detail=$this->db->query($get_task_info_sql);
				//foreach($get_task_info_detail->result())
				
				$content="<table> <tr> <th>Task id </th> <th> Target date</th></tr>";
								foreach ($get_task_info_detail->result() as $get_info)
				{
					//echo "Hiiii";
					//print_r($get_info);
					$user_name=$get_info->full_name;
					$email=$get_info->user_email;
					$content=$content."<tr>";
					$content=$content."<td>".$get_info->task_id. "</td>";
					$content=$content."<td>".$get_info->target_date. "</td>";					
					$content=$content."</tr>";
				}
				$content=$content."</table>";
				
				//echo $content."<<====================";exit;
				
				//code for sending email
				    //error_reporting(E_ALL);
							//error_reporting(E_STRICT);
							
							date_default_timezone_set('America/Toronto');
							
							require_once('phpmailer/class.phpmailer.php');
							//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
							
							$mail                = new PHPMailer();
							
							$body                = file_get_contents('phpmailer/template.html');
							$body                = str_replace('{username}',$user_name,$body);
							$body                = str_replace('{content}',$content,$body);
							
																		
							//$body                = preg_replace('/[\]/','',$body);
							
							$mail->IsSMTP(); // telling the class to use SMTP
							$mail->SMTPAuth      = true;                  // enable SMTP authentication
							$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
							$mail->Host          = "mail.99yrs.com"; // sets the SMTP server
							$mail->Port          = 587;                    // set the SMTP port for the GMAIL server
							$mail->Username      = "vijay@99yrs.com"; // SMTP account username
							$mail->Password      = "123456";        // SMTP account password
							$mail->SetFrom('vijay@99yrs.com', 'Vijay W');
							$mail->AddReplyTo('vijay@99yrs.com', 'Vijay ]');
							
							$mail->Subject       = "You have a new task";
							
							  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
							  //$mail->MsgHTML("Test email from localhost");
							  //$mail->MsgHTML($content);
							  //echo $body;exit;
							  
							  //$mail->MsgHTML($body);
							  //$mail->AddAddress('pratik.chheda@99yrs.com', 'vijay w');
							  $mail->AddAddress($email, $user_name);
							  
							
							
							  if(!$mail->Send()) {
							    echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
							  } else {
							    echo "Message sent to :" . $row["full_name"] . ' (' . str_replace("@", "&#64;", $row["email"]) . ')<br />';
							  }
							  // Clear all addresses and attachments for next loop
							  $mail->ClearAddresses();
							  $mail->ClearAttachments();
				//code for sending email ends here
				
				//exit;
			
				
				
				return true;
		}
		
		public function get_task_info($clientid)
		{
			//add condition for current date to target date
			$getUserTask = 'SELECT 99yrs_task_assign.id,99yrs_task_assign.task_id,99yrs_task_assign.client_id,99yrs_task_assign.target_date,99yrs_task_assign.task_value,99yrs_task.name,99yrs_client.client_name FROM 99yrs_task_assign join  99yrs_task on  99yrs_task_assign.task_id=99yrs_task.id LEFT JOIN 99yrs_client ON 99yrs_client.id=99yrs_task_assign.client_id  WHERE 99yrs_task_assign.use_id ='.$this->session->userdata('id').' and status not in (0,3) ';
			if($clientid){
				$getUserTask .= " AND 99yrs_task_assign.client_id = $clientid ";
			}
			$gettask=$this->db->query($getUserTask); 
     	return $gettask->result();
		}
		
		public function get_user_response($task_id,$comment)
		{
			$date=date("Y-m-d H:i:s");
			$comment=urldecode($comment);
			
			$add_user_response="insert into 99yrs_user_comment (`task_assign_id` , `user_id` , `user_comment` , `date_created`) values (".$task_id.",".$this->session->userdata('id').",'".$comment."', '".$date."')";
			echo 
			$this->db->query($add_user_response);
			$query = $this->db->query("select name from 99yrs_task where id= $task_id");
			$task_data=$query->row();
			$task_name= $task_data->name;

			$content="<table> <tr><th>Task No</th><th>Task Name</th></tr><tr><td> ".$task_id." </td><td>".$task_name."</td></tr></table> <br> Updated by <b>".$this->session->userdata('full_name').".</b>";
			
			$this->sendemail($username,$content,$email_parent);
			$this->db->query($add_user_response);
			return true;
		}
		
		public function get_admin_user_response($task_id,$status_val)
		{
			$data = array(
               'status' => $status_val,
            );

			$this->db->where('task_id', $task_id);
			$this->db->update('99yrs_task_assign', $data); 
			return true;
		}
		
		public function show_task_upto($clientId)
		{
			$selected_date_task = "SELECT tsa.id,tsa.status,cl.company_name,tsk.name,tsa.task_value,u.full_name,tsa.target_date,
			(SELECT 99yrs_user_comment.user_comment FROM 99yrs_user_comment WHERE 99yrs_user_comment.task_assign_id = tsa.id order by 99yrs_user_comment.id DESC LIMIT 1) as comment
			FROM 
			99yrs_task_assign as tsa LEFT JOIN 99yrs_client as cl ON tsa.client_id = cl.id 
			LEFT JOIN 99yrs_task as tsk on tsa.task_id=tsk.id
			LEFT JOIN 99yrs_user as u on tsa.use_id=u.id
			WHERE tsk.name IS NOT NULL AND tsa.use_id > 0 ";
			if($clientId){
				$selected_date_task .= " AND cl.id =$clientId ";
			}
			$selected_date_task .= "GROUP BY tsa.id";
			$show_task=$this->db->query($selected_date_task);
			return $show_task->result();
		}
		public function getClients($date)
		{
			//echo $date;
			$selected_client = "SELECT id, company_name FROM 99yrs_client ";
			//echo $selected_date_task;
			$show_task=$this->db->query($selected_client);
			return $show_task->result();
		}
		
		public function sendemail($username,$content,$email)
		{
			//error_reporting(E_ALL);
							//error_reporting(E_STRICT);
							
							date_default_timezone_set('America/Toronto');
							
							require_once('phpmailer/class.phpmailer.php');
							//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
							
							$mail                = new PHPMailer();
							
							$body                = file_get_contents('phpmailer/task_update.html');
							$body                = str_replace('{username}',$user_name,$body);
							$body                = str_replace('{content}',$content,$body);
							
																		
							//$body                = preg_replace('/[\]/','',$body);
							
							$mail->IsSMTP(); // telling the class to use SMTP
							$mail->SMTPAuth      = true;                  // enable SMTP authentication
							$mail->SMTPKeepAlive = true;                  // SMTP connection will not close after each email sent
							$mail->Host          = "mail.99yrs.com"; // sets the SMTP server
							$mail->Port          = 587;                    // set the SMTP port for the GMAIL server
							$mail->Username      = "vijay@99yrs.com"; // SMTP account username
							$mail->Password      = "123456";        // SMTP account password
							$mail->SetFrom('vijay@99yrs.com', 'Vijay W');
							$mail->AddReplyTo('vijay@99yrs.com', 'Vijay ]');
							
							$mail->Subject       = "Task update mail";
							
							  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
							  //$mail->MsgHTML("Test email from localhost");
							  //$mail->MsgHTML($content);
							  //echo $body;exit;
							  
							  $mail->MsgHTML($body);
							  $mail->AddAddress('vijay@99yrs.com', 'vijay w');
							  //$mail->AddAddress($email, $username);			
							  if(!$mail->Send()) {
							    echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
							  } else {
							    echo "Message sent to :" . $row["full_name"] . ' (' . str_replace("@", "&#64;", $row["email"]) . ')<br />';
							  }
							  // Clear all addresses and attachments for next loop
							  $mail->ClearAddresses();
							  $mail->ClearAttachments();
		}
		
		public function show_report()
		{
			$date=date('Y-m-d');
			$get_report= "select * from 99yrs_task where target_date='$date'";
			$report_result=$this->db->query($get_report);
			return  $report_result->result();
			}
		
	}
?>
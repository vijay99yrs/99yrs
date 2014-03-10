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
			$gettask=$this->db->query('SELECT * FROM 99yrs_task WHERE user_to = 0');
     			return $gettask->result();
		}
		public function give_user_task($userid,$get_task_id)
		{
				$current_date=date('Y-m-d H:i:s');
				$task_id=implode(',',$get_task_id);
				
				$update_task_table=" UPDATE 99yrs_task SET user_to=$userid, date_created='$current_date' WHERE id IN($task_id)";
				$this->db->query($update_task_table);
				$get_task_info_sql="SELECT 99yrs_user.id, 99yrs_user.user_email, 99yrs_user.full_name ,99yrs_task.task_short_desc,99yrs_task.task_details,99yrs_task.target_date FROM 99yrs_task LEFT JOIN 99yrs_user ON 99yrs_task.user_to = 99yrs_user.id WHERE 99yrs_task.id IN ($task_id )";
				$get_task_info_detail=$this->db->query($get_task_info_sql);
				//foreach($get_task_info_detail->result())
				
				$content="<table> <tr> <th>Task name </th> <th> Target date</th></tr>";
				foreach ($get_task_info_detail->result() as $get_info)
				{
					//echo "Hiiii";
					//print_r($get_info);
					$user_name=$get_info->full_name;
					$email=$get_info->user_email;
					$content=$content."<tr>";
					$content=$content."<td>".$get_info->task_short_desc. "</td>";
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
							  
							  $mail->MsgHTML($body);
							  $mail->AddAddress('vijay@99yrs.com', 'vijay w');
							  //$mail->AddAddress($email, $user_name);
							  
							
							
							  if(!$mail->Send()) {
							    echo "Mailer Error (" . str_replace("@", "&#64;", $row["email"]) . ') ' . $mail->ErrorInfo . '<br />';
							  } else {
							    echo "Message sent to :" . $row["full_name"] . ' (' . str_replace("@", "&#64;", $row["email"]) . ')<br />';
							  }
							  // Clear all addresses and attachments for next loop
							  $mail->ClearAddresses();
							  $mail->ClearAttachments();
				//code for sending email ends here
				
				exit;
			
				
				
				return true;
		}
		
		public function get_task_info()
		{
			//add condition for current date to target date
			$gettask=$this->db->query('SELECT * FROM 99yrs_task WHERE user_to ='.$this->session->userdata('id').' and task_status != "complete"');
     			return $gettask->result();
		}
		
		public function get_user_response($id,$closing_date,$comment='no comments',$status)
		{
											$date = str_replace('/', '-', $closing_date);
											$task_close_date= date('Y-m-d', strtotime($date));
			$add_user_response="UPDATE 99yrs_task SET task_close_date='$task_close_date', task_comment='$comment', task_status='$status' where id=$id";
			//echo $add_user_response;
			/*$data=array(
			     'task_id'=$id,
			     'user_comment'=
			);*/
	    $query = $this->db->query("select full_name, user_email from 99yrs_user where id=".$this->session->userdata('parent_id'));	
	    $row=$query->row();
	    //print_r($row);
	    //echo $row->full_name;exit;
			$username=$row->full_name;
			$email_parent=$row->user_email;
			$content="Task no : $id is updated by ".$this->session->userdata('full_name');
			
			
			//$this->sendemail($username,$content,$email_parent);
			$this->db->query($add_user_response);
			return true;
		}
		public function show_task_upto($date)
		{
			//echo $date;
			$selected_date_task = "SELECT * FROM 99yrs_task WHERE user_to !=0 AND target_date <= '$date'";
			//echo $selected_date_task;
			$show_task=$this->db->query($selected_date_task);
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
							
							$mail->Subject       = "You have a new task";
							
							  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
							  //$mail->MsgHTML("Test email from localhost");
							  //$mail->MsgHTML($content);
							  //echo $body;exit;
							  
							  $mail->MsgHTML($body);
							  $mail->AddAddress('sumeet.pattanayak@99yrs.com', 'vijay w');
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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="<?php echo base_url();?>script/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>script/jquery-ui.js"></script>
 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>
<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

	<div class="topshell">
		
			 <div class="header">
					                <div class="logo_box">
					                	<img src="<?php echo base_url();?>images/logo.png" width="208" height="95" />
					                </div>
					                <div class="toparea">
															<div class="guestlogin">
		
																<?php
																$logged_in_user=$this->session->userdata('full_name'); 
																echo "<a>". $logged_in_user. "</a>";
															?>
																
																</div>
															<div class="welcomebox"><a>Welcome :</a></div>
									</div>
			 </div>
	</div>	 
	  <div class="navishell">
					<div class="naviarea">
					
					   <ul id="nav">
					      <?php
					      if($this->session->userdata('parent_id')== 0)
					      {
					      	echo "<li><a href=" .site_url('csvcontroller/upload_csv'). ">Upload task</a></li>";
					      	echo "<li><a href=" .site_url('taskcontroller/task_assign'). ">Assign Task</a></li>";
					      	echo "<li><a href=" .site_url('admin/task_status'). ">Task Status</a></li>";
					      }
					       ?>
					       <?php if($this->session->userdata('id'))
					       {
					       		if($this->session->userdata('parent_id')!= 0){ ?>
					        		<li><a href="<?php echo site_url('user/logout'); ?>">Logout</a></li>
					      <?php } else { ?>
					      				<li><a href="<?php echo site_url('admin/logout'); ?>">Logout</a></li>
					       <?php }}else{ ?>
					        <li><a href="#">Login</a></li>
					       <?php } ?>   
					   </ul>
					</div>
		</div>		
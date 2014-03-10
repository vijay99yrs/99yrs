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
<div id="wapper">
	<div class="topshell">
		
			 <div class="header">
					                <div class="logo_box">
					                	<img src="<?php echo base_url();?>images/logo.png" width="208" height="95" />
					                </div>
			 </div>
	</div>
	 
	  <div class="navishell">
					<div class="naviarea">
					
					   <ul id="nav">
					      <li><a href="#">About Us</a></li>
					      <li><a href="#">Packages</a></li>
					      <li><a href="#">FAQs</a></li>
					      <li><a href="#">Contact</a></li>
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
<!------HEADER END------------->
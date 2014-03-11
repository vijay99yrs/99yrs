<?php $this->load->view('header.php'); ?>
     <div id="wrapper_header">
			     <form action="" method="post" enctype="multipart/form-data">
												Upload You File here (only csv are allowed) .<br/>
									  			Choose your file:
									 			 <input name="csv" type="file" id="csv" />
									 			 <input type="submit" name="submit" value="Submit" />
											</form>
	</div>
			<a href="../admin/task_status"> Task Status </a>
			<a href="<?php echo site_url('taskcontroller/task_assign'); ?>">Assign task</a>
 
<?php $this->load->view('footer.php'); ?>
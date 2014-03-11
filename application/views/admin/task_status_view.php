
<?php $this->load->view('header.php'); ?>

 <div id="wapper">
	<div id="wrapper_header">
			<a href="#">Back</a>
			<form action="get_task_status" method="post">
				Select Date:<input type="text" name="get_date" id="datepicker"> <input type="Submit" value="send date" >
				</form>
				
				<?php if($get_task){ ?>
					<div class="dropshell_2">
						<div class="cleardiv1"></div>
						<div class="heading_table">Task Name </div>	
						<div class="heading_table">Task Details</div>
						<div class="heading_table">Task Value</div>
						<div class="heading_table">Client Id</div>
						<div class="heading_table">User Assigned</div>
						<div class="heading_table">Target Date</div>
						<div class="heading_table">Task Priority</div>
						<div class="heading_table">Closing date</div>
						<div class="heading_table">User Comment</div>
						<div class="heading_table">Task Status</div>
					</div>
					
				<?php foreach($get_task as $user_task)
				{
					echo "<div class='dropshell_bg1'>";
					echo "<div class='rowlist_table'>".$user_task->task_short_desc."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_details."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_value."</div>";
					echo "<div class='rowlist_table'>".$user_task->client_id."</div>";
					echo "<div class='rowlist_table'>".$user_task->user_to."</div>";
					echo "<div class='rowlist_table'>".$user_task->target_date."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_priority."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_close_date."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_comment."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_status."</div>";
					echo "</div>";
				}
				} ?>

  </div> 
</div>
<?php $this->load->view('footer.php'); ?>
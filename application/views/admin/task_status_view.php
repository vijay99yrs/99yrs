
<?php $this->load->view('header.php'); ?>

     
			<a href="#">Back</a>
			<form action="get_task_status" method="post">
				Select Date:<input type="text" name="get_date" id="datepicker"> <input type="Submit" value="send date" >
				</form>
				
				<?php if($get_task){ ?>
				<table>
					<tr>
						<th align="center">Task Name </th>	
						<th align="center">Task Details</th>
						<th align="center">Task Value</th>
						<th align="center">Client Id</th>
						<th align="center">User Assigned</th>
						<th align="center">Target Date</th>
						<th align="center">Task Priority</th>
						<th align="center">Closing date</th>
						<th align="center">User Comment</th>
						<th align="center">Task Status</th>
					<tr/>
					
				<?php foreach($get_task as $user_task)
				{
					echo "<tr>";
					echo "<td align='center'>".$user_task->task_short_desc."</td>";
					echo "<td align='center'>".$user_task->task_details."</td>";
					echo "<td align='center'>".$user_task->task_value."</td>";
					echo "<td align='center'>".$user_task->client_id."</td>";
					echo "<td align='center'>".$user_task->user_to."</td>";
					echo "<td align='center'>".$user_task->target_date."</td>";
					echo "<td align='center'>".$user_task->task_priority."</td>";
					echo "<td align='center'>".$user_task->task_close_date."</td>";
					echo "<td align='center'>".$user_task->task_comment."</td>";
					echo "<td align='center'>".$user_task->task_status."</td>";
					echo "</tr>";
				}
				 ?> 
				</table>
				<?php } ?>

   
<?php $this->load->view('footer.php'); ?>
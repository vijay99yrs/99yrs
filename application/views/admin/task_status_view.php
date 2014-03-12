
<?php $this->load->view('header.php'); ?>

<script type="text/javascript">
	function abc(task_id)
	{
        var comment
        var task_status;
        //task_id=$('#task_id').val();
        status_val=$('#task_status_'+task_id).val();
        //alert(task_id+'---'+status_val);
        $.ajax({
            url: 'update_task_status'+'/'+task_id+'/'+status_val,
            data: {},
            //dataType : 'json',
            dataType : 'html',
            success: function (data) {
  						alert('status updated');
            }
        });
    
  }
</script>


 <div id="wapper">
	<div id="wrapper_header">
			<a href="#">Back</a>
			<form action="get_task_status" method="post">
				<div class="dropshell">
		
			<select name="clientid" id="clientid" class="listmenu_1">
				<?php 
				echo "<option value='0' selected='selected'>All</option>";	
				foreach($clients as $client)
				{	
					if($clientid == $client->id ){
						echo "<option value=". $client->id ." selected='selected'>". $client->company_name ."</option>";	
					}else{
						echo "<option value=". $client->id .">". $client->company_name ."</option>";	
					}	
				}
				?>
			</select>
			<input type="submit" value="Check Task" class="button_ex" name="submit">
		
</div>
				</form>
					<div class="dropshell_2">
						<div class="cleardiv1"></div>
						<div class="heading_table">Task Id</div>
						<div class="heading_table">Task Name</div>
						<div class="heading_table">Task Value</div>
						<div class="heading_table">Client</div>
						<div class="heading_table">User</div>
						<div class="heading_table">Target Date</div>
						<div class="heading_table">Closing date</div>
						<div class="heading_table">User Comment</div>
						<div class="heading_table">Task Status</div>
					</div>
				<?php if($get_task){ ?>
				
					
				<?php foreach($get_task as $user_task)
				{
					echo "<div class='dropshell_bg1'>";
					echo "<div class='rowlist_table'>".$user_task->id."</div>";
					echo "<div class='rowlist_table'>".$user_task->name."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_value."</div>";
					echo "<div class='rowlist_table'>".$user_task->company_name."</div>";
					echo "<div class='rowlist_table'>".$user_task->full_name."</div>";
					echo "<div class='rowlist_table'>".$user_task->target_date."</div>";
					echo "<div class='rowlist_table'>".$user_task->task_close_date."</div>";
					echo "<div class='rowlist_table'>".$user_task->comment."</div>";
					?>
					<div class='rowlist_table'>
							<select name="status" onChange="abc(<?php echo $user_task->id; ?>);" id="task_status_<?php echo $user_task->id ?>">
							  <option value="0" <?php if($user_task->status==0) echo "selected"; ?>>Inactive</option>
							  <option value="1" <?php if($user_task->status==1) echo "selected"; ?>>Pending</option>
							  <option value="2" <?php if($user_task->status==2) echo "selected"; ?>>Complete</option>
							  <option value="3" <?php if($user_task->status==3) echo "selected"; ?>>Close</option>
							</select>
					</div>
					<?php 
					echo "</div>";
				}
				} ?>

  </div> 
</div>
<?php $this->load->view('footer.php'); ?>
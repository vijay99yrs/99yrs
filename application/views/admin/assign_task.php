<?php $this->load->view('header.php'); ?>

<div id="wapper">
	<div id="wrapper_header">
<form name="" method="post" action="process_task">
<div class="dropshell">
		
			<select name="getuserid" id="getuserid" class="listmenu_1">
				<?php 

				foreach($getuser as $user)
				{	
					echo "<option value=". $user->id .">". $user->full_name ."</option>";	
				}
				?>
			</select>
			<input type="submit" value="Assign Task" class="button_ex" name="submit">
		
</div>
<div class="table_container">
<div class="mytable">
<div class="dropshell_2">
<div class="cleardiv1"></div>
<div class="heading_table">Select Task</div>
<div class="heading_table">Task Name</div>
<div class="heading_table">Client Name</div>
<div class="heading_table">Target date</div>
</div>
		<?php	
		//print_r($gettask);
		foreach($gettask as $task )
		{
			echo "<div class='dropshell_bg1'>";
			echo "<div class='rowlist_table'><input type='checkbox' name='add[]' id='box' value=".$task->task_id."></div><div class='rowlist_table'>".$task->name."</div><div class='rowlist_table'>".$task->client_name."</div><div class='rowlist_table'>".$task->target_date."</div>";
			echo "</div>"; 	
		}
		?>

</div>
</div>
</form>
</div>
</div>
<?php $this->load->view('footer.php'); ?>

<?php $this->load->view('header.php'); ?>
<form name="" method="post" action="process_task">
Choose User For task: <select name="getuserid" id="getuserid">
<?php 
foreach($getuser as $user)
{	
	echo "<option value=". $user->id .">". $user->full_name ."</option>";	
}
?>
</select>
<table>
	<tr>
		<th align="center">select task </th>
		<th align="center">Task Name</th>
		<th align="center">client_id</th>
	</tr>
<?php
foreach($gettask as $task )
{
	echo "<tr>";
	echo "<td align='center'><input type='checkbox' name='add[]' value=".$task-> id."></td><td align='center'>".$task-> task_short_desc."</td><td align='center'>".$task->client_id."</td>";
	echo "</tr>"; 	
}
?>
</table>
<input type="submit" value="Assign Task" name="submit">
</form>
<?php $this->load->view('footer.php'); ?>

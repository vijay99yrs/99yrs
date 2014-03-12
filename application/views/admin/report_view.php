<?php $this->load->view('header.php'); ?>
<div id="wapper">
	<div id="wrapper_header">
		<?php 
				if ($get_report)
				{
					echo "<table> <tr> <th> Task Name </th> <th> User Id </th> <th> Task Status</th></tr>";
					foreach($get_report as $today_target)
					{
						echo "<tr> <td>".$today_target->task_short_desc."</td>";
						echo "<td>".$today_target->user_to. "</td>";
						echo "<td>" .$today_target->task_status."</td>";
						echo "</tr>";
						
						}	
					echo "</table>";
				}
		?>
</div>
</div>
<?php $this->load->view('footer.php'); ?>

<?php $this->load->view('header.php'); ?>

<script type="text/javascript">
	$(function () {
    $('#save').on('click', function () {
        var Status = $(this).val();
        var task_id;
        var comment;
        var task_status;
        task_id=$('#task_id').val();
        comment=$('#user_comment').val();
        task_status=$('#task_status').val();
        //alert(task_id+'---'+comment+'---'+task_status);
        $.ajax({
            url: 'user/update_task_status'+'/'+task_id+'/'+comment+'/'+task_status,
            data: {},
            //dataType : 'json',
            dataType : 'html',
            success: function (data) {
            	
            }
        });
    });
});
</script>

     <div id="wrapper_header">
     	
     	<div class="task_details">
     		<table>
     							<tr>
						     	  <th>Task short description </th>
						     	  <th>Task details </th>
						     	  <th>Task value </th>
						     	  <th>Task Target date </th>
						     	  <th>Task priority </th>
						     	  <!--<th>Task close date </th>-->
						     	  <th></th>
						     	  <th>Task comment </th>
						     	  <th>Task created </th>
						     	  <th>Task short description </th>
						     	<th>Submit</th>
									</tr>
									     <?php 
									     //print_r($uset_data);
									           foreach($uset_data as $value)
									           {
									           	//echo $value->task_short_desc.'<=============';exit;
									           	//$value->task_short_desc; 
									      ?>
												       	<tr>
												       		<!--user/user_response-->
													    <td><input type="hidden" name="id" id="task_id" value="<?php echo $value->id; ?>">
													    	 <?php echo $value->task_short_desc; ?></td>
													     <td> <?php echo $value->task_details; ?></td>
													     <td> <?php echo $value->task_value; ?></td>
													     <td> <?php echo $value->target_date; ?></td>
													     <td> <?php echo $value->task_priority; ?></td>
													     <td > <?php $value->task_close_date; ?></td>
													     <td> <textarea row="100" column="10" name="user_comment" id="user_comment" ></textarea></td>
													     <td><?php echo $value->date_created; ?></td>
													     <td>
													     	<select name="status" id="task_status"> Status
													     		<option value="complete">Complete</option>
													     		<option value="Pending">Pending</option>
													     		<option value="inprogress">In Progress</option>
													     	</select></td>
													     <td> <input type="button" id="save" name="save" value="Save"></td>
													   </tr>
									       <?php } ?>
									     
									       
			          
			     
			   </table>
			</div>

   
<?php $this->load->view('footer.php'); ?>
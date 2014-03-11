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
     		
     							<div class="dropshell_2">
     								<div class="cleardiv1"></div>
						     	  <div class="heading_table">Task short description </div>
						     	  <div class="heading_table">Task details </div>
						     	  <div class="heading_table">Task value </div>
						     	  <div class="heading_table">Task Target date </div>
						     	  <div class="heading_table">Task priority </div>
						     	  <!--<th>Task close date </th>-->
						     	  <div class="heading_table">Task comment </div>
						     	  <div class="heading_table">Task created </div>
						     	  <div class="heading_table">Status </div>
						     	<div class="heading_table">Submit</div>
									</div>
									     <?php 
									     //print_r($uset_data);
									     $i=0;
									           foreach($uset_data as $value)
									           {
									           	if(Si%2==0)
									           	{
									           	//echo $value->task_short_desc.'<=============';exit;
									           	//$value->task_short_desc; 
									      ?>
												       	<div class="dropshell_bg1">
												       		<!--user/user_response-->
													    <div class="rowlist_table"><input type="hidden" name="id" id="task_id" value="<?php echo $value->id; ?>">
													    	 <?php echo $value->task_short_desc; ?></div>
													     <div class="rowlist_table"> <?php echo $value->task_details; ?></div>
													     <div class="rowlist_table"> <?php echo $value->task_value; ?></div>
													     <div class="rowlist_table"> <?php echo $value->target_date; ?></div>
													    <div class="rowlist_table"> <?php echo $value->task_priority; ?></div>
													     <!--<div class="rowlist_table"> <?php echo $value->task_close_date; ?></div>-->
													     <div class="rowlist_table"> <textarea row="5" column="5" name="user_comment" id="user_comment" ></textarea></div>
													     <div class="rowlist_table"><?php echo $value->date_created; ?></div>
													     <div class="rowlist_table">
													     	<select name="status" id="task_status"> Status
													     		<option value="complete">Complete</option>
													     		<option value="Pending">Pending</option>
													     		<option value="inprogress">In Progress</option>
													     	</select></div>
													     <div class="rowlist_table"> <input type="button" id="save" name="save" value="Save"></div>
													   </div>
												       <?php }
												       
												       if(Si%2!=0){
												       	?>
												       	
												       	<div class="dropshell_bg2">
												       		<!--user/user_response-->
													    <div class="rowlist2_table"><input type="hidden" name="id" id="task_id" value="<?php echo $value->id; ?>">
													    	 <?php echo $value->task_short_desc; ?></div>
													     <div class="rowlist2_table"> <?php echo $value->task_details; ?></div>
													     <div class="rowlist2_table"> <?php echo $value->task_value; ?></div>
													     <div class="rowlist2_table"> <?php echo $value->target_date; ?></div>
													    <div class="rowlist2_table"> <?php echo $value->task_priority; ?></div>
													     <!--<div class="rowlist_table"> <?php echo $value->task_close_date; ?></div>-->
													     <div class="rowlist2_table"> <textarea row="5" column="5" name="user_comment" id="user_comment" ></textarea></div>
													     <div class="rowlist2_table"><?php echo $value->date_created; ?></div>
													     <div class="rowlist2_table">
													     	<select name="status" id="task_status"> Status
													     		<option value="complete">Complete</option>
													     		<option value="Pending">Pending</option>
													     		<option value="inprogress">In Progress</option>
													     	</select></div>
													     <div class="rowlist2_table"> <input type="button" id="save" name="save" value="Save"></div>
													   </div>
												       <?php }
												       $i++;
									       
									       } ?>

			</div>
		</div>   
<?php $this->load->view('footer.php'); ?>
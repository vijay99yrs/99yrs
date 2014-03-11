<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Csvcontroller extends CI_Controller
	{
		public function __construct()
   {
        parent::__construct();
        if(!$this->session->userdata('id'))    
        {
        	redirect("login");
        }
        // Your own constructor code
   }
		public function upload_csv()
     {
     	
     			$this->load->view('admin/csv_view');	   
     			//$this->template->load('header', 'admin/csv_view'); 		
     			if ($_FILES['csv']['size'] > 0) 
    {
        //get the csv file
        $file = $_FILES['csv']['tmp_name'];
        $filename=basename($_FILES['csv']['name']);
        $handle = fopen($file,"r");
        $i=0;
        if (substr($filename,-3)=="csv")
            {  
            do {
            	if($data[0]){
                if ($i>0) //to skip line 1 in csv file
                    {
                    	$var = $data[4];
											$date = str_replace('/', '-', $var);
											$target_date= date('Y-m-d', strtotime($date));
                    	$date_created=date('Y-m-d');
                    	$insert_task_sql = "INSERT INTO 99yrs_task (task_short_desc,task_details,task_value,client_id,target_date,task_priority,date_created)
        								VALUES (".$this->db->escape($data[0]).",".$this->db->escape($data[1]).",".$this->db->escape($data[2]).",".$this->db->escape($data[3]).",".$this->db->escape($target_date).",".$this->db->escape($data[5]).",".$this->db->escape($date_created).")";
												//echo "$insert_task_sql<br>"; exit;
												$this->db->query($insert_task_sql);
                    }
                    $i++;
                  }
                    
                } while ($data = fgetcsv($handle,100000,","));
               
                move_uploaded_file($_FILES['csv']['tmp_name'], './csv/'.$_FILES['csv']['name']);
              echo "Data uploaded Successfuly";
            }
            else
            {
            	echo "Uploaded file is not csv file please try again";
            }
    }
     			
     }
 
		
	}
	
?>
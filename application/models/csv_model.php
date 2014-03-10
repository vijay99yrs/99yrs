<?php	
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Csv_model extends CI_Model
	{	
		public function uploadcsv($filename)
		{
			if ($_FILES['csv']['size'] > 0) 
    {
        //get the csv file
        $file = $_FILES['csv']['tmp_name'];
        $filename=basename($_FILES['csv']['name']);
        $handle = fopen($file,"r");
        if (substr($filename,-3)=="csv")
            {/*
            do {
                if ($data[0]) 
                    {
                    	$sql = "INSERT INTO mytable (title, name)
        								VALUES (".$this->db->escape($data[0]).", ".$this->db->escape($data[0]).")";
												$this->db->query($sql);
                    }
                } while ($data = fgetcsv($handle,1000,","));
                move_uploaded_file($_FILES['csv']['tmp_name'], 'csv/'.$_FILES['csv']['name']);
               */
               return true; 
            }
            else
            {
                return false;
            }
    }
			
		}
		
	}
?>
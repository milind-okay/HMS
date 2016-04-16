<?php

class Receptionist extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function add_patient($data){
		$this->db->where('app_id',$data);
		$query = $this->db->get('appointment');
		 if($query->num_rows() > 0){
			 $this->db->insert('patient', $query->result());
			 return TRUE;
		 }
		 return FALSE;
	}
	


	
}
?>

<?php

class Appointment_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function insert_patient($data){
		$this->db->insert('appointment', $data);
	}
	function get_patient($id){
		 $this->db->where('app_id',$id);
    $query = $this->db->get('appointment');
    return $query->result_array();
	}
	function remove_patient($id){
		$this->db->where('app_id',$id);
		if($this->db->delete('appointment'))
			return TRUE;
		else
			return FALSE;
		
	}
	function get_app_id($data){
		 $this->db->where('d_id',$data['d_id']);
		 $this->db->where('Name',$data['Name']);
		 $this->db->where('DOB',$data['DOB']);
    $query = $this->db->get('appointment');
    return $query->result_array();
	}


	
}

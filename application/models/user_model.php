<?php

class User_model extends CI_Model
{


	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		
	}

	function getDoctorById($id,$data)
	{
		 $this->db->where('e_id',$id);
		 $this->db->where('password',$data);
    $query = $this->db->get('doctor');
		if($query->num_rows()==1){
		 return TRUE;
		}else{
			return FALSE;
		}
		
	}

	function getPatientById($id,$data)
	{
		 $this->db->where('p_id',$id);
		 $this->db->where('password',$data);
    $query = $this->db->get('patient');
		if($query->num_rows()==1){
		 return TRUE;
		}else{
			return FALSE;
		}
		
	}

	function getAdminById($id,$data)
	{
		 $this->db->where('e_id',$id);
		 $this->db->where('password',$data);
    $query = $this->db->get('receptionist');
		if($query->num_rows()==1){
		 return TRUE;
		}else{
			return FALSE;
		}
		
	}

		
}


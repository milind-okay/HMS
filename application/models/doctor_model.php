<?php

class Doctor_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function insert_doctor($data){
		$this->db->insert('doctor', $data);
	}
	function get_doctors(){
		//$this->db->where('doctor.e_id','employee.e_id');
    //$query = $this->db->get('doctor ,employee');
		$query = $this->db->query('SELECT d_id,mk.name, Mon,Tue,Wed,Thu,Fri FROM (SELECT doctor.e_id AS id ,name FROM doctor,employee WHERE doctor.e_id = employee.e_id) AS mk,timetable WHERE d_id = mk.id ' );

    if($query->num_rows() > 0)
			return $query->result();
	}
	function view_doctors(){
		//$this->db->where('doctor.e_id','employee.e_id');
    //$query = $this->db->get('doctor ,employee');
		$query = $this->db->query('SELECT d_id,mk.name,mk.Dept,mk.Designation,mk.qualification, Mon,Tue,Wed,Thu,Fri FROM (SELECT doctor.e_id AS id ,name,Dept,Designation,qualification FROM doctor,employee WHERE doctor.e_id = employee.e_id) AS mk,timetable WHERE d_id = mk.id ' );

    if($query->num_rows() > 0)
			return $query->result();
	}


	
}

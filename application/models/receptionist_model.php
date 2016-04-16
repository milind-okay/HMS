<?php

class Receptionist_model extends CI_Model
{

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	function view_patient($data){
		
		$this->db->where('app_id',$data);
		$query = $this->db->get('appointment');
		 if($query->num_rows() > 0){
		 
			 return $query->result_array();
		 }
		 return FALSE;
	}
	function add_patient($patient_data,$treat_data){
		
			 if($this->db->insert('patient', $patient_data) &&
			 $this->db->insert('treats', $treat_data))
			 return TRUE;
		 
		 return FALSE;
	}
	function edit_patient($data){
		
		$this->db->where('app_id',$data);
		$query = $this->db->get('appointment');
		 if($query->num_rows() > 0){
		 	$patient_data = array();
		 	$treat_data=array();
		 	foreach ($query->result_array() as $key => $value) {
		 		$patient_data['p_id'] = $value['app_id'];
		 		$patient_data['Name'] = $value['Name'];
		 		$patient_data['Sex'] = $value['Sex'];
		 		$patient_data['DOB'] = $value['DOB'];
		 		$patient_data['Age'] = "23";
		 		$patient_data['Address'] = $value['Address'];
		 		$patient_data['PhNo'] = $value['PhNo'];
		 		$patient_data['password'] = "pass123";
		 		$treat_data['d_id'] = $value['d_id'];
		 		$treat_data['p_id'] = $value['app_id'];

		 	}
			 $this->db->insert('patient', $patient_data);
			 $this->db->insert('treats', $treat_data);
			 return TRUE;
		 }
		 return FALSE;
	}


	
}
?>

<?php 
    class Reception_model extends CI_Model{
		function __construct()
		{
			parent::__construct();
		}
		function medicine_insert($data){
			$this->db->insert('medicine',$data);
		}
			function medical_history_insert($data){
			$this->db->insert('medical_history',$data);
		}
	}
?>
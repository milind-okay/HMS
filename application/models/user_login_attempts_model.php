<?php

class User_login_attempts_model extends CI_Model
{

	var $table = 'user_login_attempts';
	function __construct()
	{
		
		parent::__construct();
	}

	function insert($data)
	{
		$this->db->insert($this->table,$data);
	}
}
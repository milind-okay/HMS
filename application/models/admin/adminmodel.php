<?php
	class Adminmodel extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}
		function get_admin_details($p)
		{
			$temp=$this->db->query(
			"select * 
			from admin
			where e_id={$p}");
	 
			return $temp->result()[0];
		}
		function get_employee_details()
		{
			$temp=$this->db->query(
			"select * 
			from employee ") ;
			
	 
			return $temp->result();
		}
		function set_admin_password($login_id,$new_password)
		{
			$temp=$this->db->query(" update admin set password={$new_password} where e_id={$login_id} ");
			return $temp;
									 
		}
		function fire_employee($e_id)
		{
			
			$temp=$this->db->query(" delete from nurse where e_id={$e_id} ");
			$temp=$this->db->query(" delete from doctor where e_id={$e_id} ");
			$temp=$this->db->query(" delete from receptionist where e_id={$e_id} ");
			$temp=$this->db->query(" delete from employee where e_id={$e_id} ");
			return $temp;
			
			
		}
		function make_admin($e_id)
		{
			$temp1=$this->db->query(" select e_id, password from (select e_id, password from doctor union select e_id, password from receptionist union select e_id, password from nurse
										) where e_id={$e_id} ");
			return $temp1->result()[0];
										
		}
		function set_new_admin($admin_id,$admin_password)
		{
			$temp1=$this->db->query(" insert into admin(e_id, password ) values({$admin_id},{$admin_password}) ");
			return $temp1;
		
		}
		function fill_nurse_details($new_employee_id,$ward_no)
		{
			$temp1=$this->db->query(" insert into nurse(e_id, ward_no ) values({$new_employee_id},{$ward_no}) ");
			return $temp1;
		}
		function fill_doctor_details($new_employee_id,$designation,$department,$password)
		{
			$temp1=$this->db->query(" insert into doctor(e_id, Dept, Designation, password  ) values({$new_employee_id},{$designation}, {$department}, {$password}) ");
			return $temp1;
		}
		function fill_receptionist_details($new_employee_id,$password)
		{
			$temp1=$this->db->query(" insert into receptionist(e_id, password ) values({$new_employee_id},{$password}) ");
			return $temp1;
		}
		function fill_employee_table($name,$DOB,$sex,$contact_no,$qualification,$experience)
		{
			$temp1=$this->db->query(" insert into employee(name, DOB, sex, contact_no, qualification, experience ) values({$name},{$DOB}, {$sex}, {$contact_no}, {$qualification},{$experience}) ");
			$temp1=$this->db->query(" select_last_insert_id()");
			return $temp1;
		}
		
		
		}
?>
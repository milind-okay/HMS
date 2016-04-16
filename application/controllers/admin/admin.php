<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 function __construct() {
         parent::__construct();
		  $this->load->model('admin/adminmodel');
		  $this ->load->library('form_validation');
		  $data=array();
		  $new_employee_id=0;
		}
		public function index()
		 
		{
			$_SESSION["login_id"]=1234;
			$this->data["admin"]=$_SESSION["login_id"];
			if(isset($_POST["current_password"]) && isset($_POST["new_password"]) && isset($_POST["new_password2"]) && $_POST["new_password"]===$_POST["new_password2"] )
			{
				$password=$this->adminmodel->get_admin_details($_SESSION["login_id"]);
				if( $password->{"e_id"} === $_POST["current_password"] )
				 {
					$this->data["flag"]=$this->adminmodel->set_admin_password($_SESSION["login_id"],$_POST["new_password"]);
					unset($_POST["current_password"]);
					unset($_POST["new_password"]);
					unset($_POST["new_password2"]);
					
					}
			}
			if(isset($_POST["what_to_do"]))
			{
				if($_POST["what_to_do"]=="fire")
				{
					$this->adminmodel->fire_employee($_GET["e_id"]);//delete from employee table and from one of doctor ,nurse  or receptionist
					unset($_POST["what_to_do"]);
				}
				else
				{
					$this->adminmodel->make_admin($_GET["e_id"]);//takeout password from doctor or nurse or receptionist and add e_id and password to admin table
					unset($_POST["what_to_do"]);
				}
			}
			$this->data["employee"]=$this->adminmodel->get_employee_details();
			if(isset($_POST["admin_id"]) && isset($_POST["admin_password"]))
				{
					$this->adminmodel->set_new_admin($_POST["admin_id"],$_POST["admin_password"]);
					unset($_POST["admin_id"]);
					unset($_POST["admin_password"]);
				}
			$this->load->view('admin/header.php');
			$this->load->view('admin/admin.php',$this->data);
			$this->load->view('admin/footer.php');
		}
		public function new_employee_details()
			{
				if(isset($_POST["new_employee_details"]))
				{
					if($_POST["position"]=="nurse")
					{
						$this->form_validation->set_rules('ward_no','ward_no','required');
						if($this->form_validation->run()==FALSE)
						{
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
						else
						{
						$this->adminmodel->fill_nurse_details($this->new_employee_id,$_POST["ward_no"]);
						unset($_GET["add_new_employee"]);
						unset($_POST["position"]);
						
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
						
						
					}
					elseif($_POST["position"]=="doctor")
					{
						$this->form_validation->set_rules('department','department','required');
						$this->form_validation->set_rules('designation','designation','required');
						$this->form_validation->set_rules('password','password','required');
						if($this->form_validation->run()==FALSE)
						{
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
						else
						{
							$this->adminmodel->fill_doctor_details($this->new_employee_id,$_POST["designation"],$_POST["department"],$_POST["password"]);
							unset($_GET["add_new_employee"]);
							unset($_POST["position"]);
						
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
					}
					else
					{
					$this->form_validation->set_rules('password','password','required');
					if($this->form_validation->run()==FALSE)
						{
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
						else
						{
						$this->adminmodel->fill_receptionist_details($this->new_employee_id,$_POST["password"]);
						unset($_GET["add_new_employee"]);
						unset($_POST["position"]);
						
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						}
					}
					
				
				}
			}
			
		public function  set_employee()
		{
				if(isset($_POST["position"]) && isset($_POST["new_employee"]))
				{
					$this->form_validation->set_rules('name','name','required');
					$this->form_validation->set_rules('DOB','DOB','required');
					$this->form_validation->set_rules('sex','sex','required');
					$this->form_validation->set_rules('contact_no','contact_no','required');
					$this->form_validation->set_rules('qualification','qualification','required');
					$this->form_validation->set_rules('experience','experience','required');
					$this->form_validation->set_rules('position','position','required');
					if($this->form_validation->run()==TRUE)
					{
						$this->new_employee_id=$this->adminmodel->fill_employee_table($_POST["name"],$_POST["DOB"],$_POST["sex"],$_POST["contact_no"],$_POST["qualification"],$_POST["experience"]);
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
					}
					else
					{
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
					}
				}
				else
				{
				$this->form_validation->set_rules('position','position','required');
					if($this->form_validation->run()==FALSE)
					{
						$this->load->view('admin/header.php');
						$this->load->view('admin/admin.php',$this->data);
						$this->load->view('admin/footer.php');
						
					}
					
				}
				
				
			
			
			
			
        
        }
}
?>
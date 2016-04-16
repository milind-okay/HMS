<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_module extends CI_Controller
{ 
  // $user=1;
	//$this->session->set_userdata('myuser_session', $user);
   public function __construct()
   {
   	parent::__construct();
   	$this->load->model('doctormodel');
   }
   public function index()
   {
   	$id=$_SESSION["login_id"];  // will be retrieved during the login session....
    $this->load->helper('date');
    $date = date('Y-m-d');
    //$date='2016-04-11';
   	$this->data['patient']=$this->doctormodel->get_all($id);
    $this->data['appointmentInfo']=$this->doctormodel->get_appointment_info($date,$id);
   	$this->load->view('doctorview',$this->data);
   }
    function viewprofile()
  {
  	$id=1;
  	$this->info['information']=$this->doctormodel->get_info($id);
    $this->load->view('viewprofile',$this->info);
  }
  function viewpatient($patientid)
  {
  	  // $this->data['id'] = $this->uri->segment(3);
       $this->info['information']=$this->doctormodel->get_patient_info($patientid);
       $this->load->view('viewpatitent',$this->info);
  }

  function redir_()
  {
     //  $this->load->library('session');
       // pass this....
       //$this->session->userdata('myuser_session')
     if(true) {
     redirect(site_url('index.php/doctor_module/index') );
  }
}
  // method to to show the appointment.......
  function showAppointment($date)
  {
     //$this->info['appointmentInfo']=$this->doctormodel->get_appointment_info($date);
    // $this->load->view('')
  }
  
   function deleteAppointment($id = '') {
  $this->load->model('doctormodel');
  $where = array('app_id' => $id); 
  $this->doctormodel->deleteRecord('appointment',$where);
  redirect('index.php/doctor_module/');
}
}

?>
<?php

class Get_appointment extends CI_Controller {
        function __construct()
        {
                parent::__construct();

                //$this->load->model('');
                $this->load->model('doctor_model');
                $this->load->model('appointment_model');
                 $this->load->helper(array('form', 'url','array'));
                $this->load->helper('date');
                $this->load->library('form_validation');
                
        }
        public function index(){
           $data['doctor_list'] = $this->doctor_model->get_doctors(); 
            $this->load->view('appointment.php',$data);
        }

        public function take()
        {
                $_POST['dob'] = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
              
                $this->form_validation->set_rules('Name','Name','required|trim|min_length[4]');
                   $this->form_validation->set_rules('PhNo','Mobile NO.','required|trim|min_length[10]');
                $this->form_validation->set_rules('dob','DOB','required|callback_date_check');
                $this->form_validation->set_rules('D_O_Appointment','Date of Appointment','required|callback_date_check');
                $this->form_validation->set_rules('d_id','Doctor','required');
                $this->form_validation->set_rules('Sex','SEX','required');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('appointment');
                }
                else
                {
                 $data = array(
                        'd_id' => ($this->input->post('d_id')),
                        'Name' => strtolower($this->input->post('Name')),
                        'Sex' => $this->input->post('Sex'),
                        'DOB' => $this->input->post('dob'),                        
                        'Address' => $this->input->post('Address'),
                        'PhNo' => $this->input->post('PhNo'),
                        'D_O_Appointment' => $this->input->post('D_O_Appointment'),
                        'D_O_Request' => now(),

                );
                $this->appointment_model->insert_patient($data);
                $app =   $this->appointment_model->get_app_id($data);
                foreach ($app as $key) $app_id = $key['app_id'];
                /*
                get from doctor model
                $doctor = $this->doctor->getDoctorById($this->input->post('d_id'));
                */
                $app_data = array(
                            'app_id' => $app_id,
                            'doctor'=> 'get from doctor model',
                            'D_O_Appointment' =>$this->input->post('D_O_Appointment'),
                            'at' => 'get from doctor model'

                  );     
                        $this->load->view('success_appointment',$app_data);
                }
        }
        public function date_check()
 {
  if(checkdate($_POST['month'],$_POST['day'],$_POST['year']))
  {
   return TRUE;
  }
  else
  {
   $this->form_validation->set_message('date_check', 'Correct you Date of Birth.');
   return FALSE;
  }
 }
}
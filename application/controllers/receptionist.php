<?php

class Receptionist extends CI_Controller {
        function __construct()
        {
                parent::__construct();
                $this->load->model('receptionist_model');
                 $this->load->helper(array('form', 'url','array'));
                $this->load->helper('date');
                $this->load->library('form_validation');
                 // $this->is_logged_in();
                
        }
        public function index(){
           $message['display'] = "";
            $this->load->view('receptionist_add_patient.php',$message);
        }
        public function add_patient_view(){
           $message['display'] = " ";
            $this->load->view('receptionist_add_patient.php',$message);
        }
        public function add_patient(){
            $this->form_validation->set_rules('app_id','Patient Appointment ID','required|trim|min_length[1]');
            if ($this->form_validation->run() == FALSE)
                {
                        $this->add_patient_view();
                }
                else
                {
                  $app_id = $this->input->post('app_id');
                  if(($data = $this->receptionist_model->view_patient($app_id))){
                    $patient_data = array();
 
      foreach ($data as $key => $value) {
        $patient_data['p_id'] = $value['app_id'];
        $patient_data['Name'] = $value['Name'];
       
        if($value['Sex'] == 1){
           $patient_data['Sex'] = "M";
        }else{
           $patient_data['Sex'] = "F";
        }
        $patient_data['DOB'] = $value['DOB'];
        $patient_data['Age'] = "23";
        $patient_data['Address'] = $value['Address'];
        $patient_data['PhNo'] = $value['PhNo'];
        $patient_data['password'] = "pass123";
        $patient_data['d_id'] = $value['d_id'];
      

      }
                  
                 $this->load->view('receptionist_patient_details',$patient_data);
               }else{
                 $message['display'] = "Appointment not found";
                 $this->load->view('receptionist_add_patient.php',$message);
               }
                

        }
      }
      public function patient_details($id =''){
      
              
                
                 $patient_data = array(
                        'p_id' => ($this->input->post('p_id')),
                        'Name' => strtolower($this->input->post('Name')),
                        'Sex' => $this->input->post('Sex'),
                        'DOB' => $this->input->post('DOB'),                        
                        'Address' => $this->input->post('Address'),
                        'PhNo' => $this->input->post('PhNo'),
                        
                        

                );
                 $treat_data = array(
                        'd_id' => ($this->input->post('d_id')),
                        'p_id' => $this->input->post('p_id')                        

                );
        if($id == 1){
          $this->receptionist_model->add_patient($patient_data,$treat_data);
          $message['display'] = "Patient details Added successfully";
        }else{
          $this->receptionist_model->edit_patient($patient_data);
          $message['display'] = "Patient details updated successfully";
        }

        $this->load->view('receptionist_success',$message);
      
    }






         public function is_logged_in(){
          $is_logged_in = $this->session->userdata('data');
          if(!isset($is_logged_in) || $is_logged_in != TRUE){
              echo 'you dont have permission to access this page<a href= "index.php/login/index">login here</a>';
          }
          die();
        }

}
?>
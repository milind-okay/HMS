<?php

class Login extends CI_Controller {
        function __construct()
        {
                parent::__construct();

                //$this->load->model('');
                $this->load->model('doctor_model');
                $this->load->model('user_model');
                 $this->load->helper(array('form', 'url','array'));
                $this->load->helper('date');
                $this->load->library('form_validation');
                $this->load->library('session');
                
        }
        public function index(){
            $error_m['message'] = ' ';
            $this->load->view('login.php',$error_m);
        }

        public function attempt()
        {
               
                $this->form_validation->set_rules('ID','UserID','required|trim|min_length[4]');
                $this->form_validation->set_rules('password','password','required|min_length[4]');
                $error_m['message'] = ' ';
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login',$error_m);
                }
                else
                {
                  $error_m['message'] = 'incorect userID or Passwoed';
                  $type = $this->input->post('type');
                 $data = $this->input->post('password');
                     $id = $this->input->post('ID');
                     if($type == 1){

                if(($this->user_model->getDoctorById($id,$data))==TRUE){
                        $login_data = array(
                          'id' => $id,
                         'ip_address'=> $this->input->ip_address(),
                         'data' => 'okay'
                          );  
                          $this->user_model->create_session($login_data);
                          $_SESSION['login_id'] = $id;
                          redirect('');     
                        //$this->load->view('success_appointment');
                      }else{
                        
                        $this->load->view('login',$error_m);
                      }
                }else if($type == 2){
                 if(($this->user_model->getPatientById($id,$data))==TRUE){
                 $login_data = array(
                          'id' => $id,
                         'ip_address'=> $this->input->ip_address(),
                         'data' => 'okay'
                          );  
                          $this->user_model->create_session($login_data);       
                        $this->load->view('success_appointment');
                      }else{
                        
                        $this->load->view('login',$error_m);
                      }

              }else{
                 if(($this->user_model->getAdminById($id,$data))==TRUE){  
                 $login_data = array(
                          'id' => $id,
                         'ip_address'=> $this->input->ip_address(),
                         'data' => 'okay'
                          );  
                          $this->user_model->create_session($login_data);     
                        $this->load->view('success_appointment');
                      }else{
                
                        $this->load->view('login',$error_m);
                      }

              }
        }
       
 
}
}
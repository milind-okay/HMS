<?php

class Home extends CI_Controller {
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
          // $data['doctor'] = $this->doctor_model->get_doctors(); 
            $this->load->view('home.php');
        }
        
}
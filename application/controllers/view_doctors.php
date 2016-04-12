<?php

class View_doctors extends CI_Controller {
        function __construct()
        {
                parent::__construct();

                //$this->load->model('');
                $this->load->model('doctor_model');
               
                 $this->load->helper(array('form', 'url','array'));
                $this->load->helper('date');
                $this->load->library('form_validation');
                
        }
        public function index(){
           $data['doctor_list'] = $this->doctor_model->view_doctors(); 
            $this->load->view('view_doctors.php',$data);
        }

 
}
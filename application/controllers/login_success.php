<?php

class login_success extends CI_Controller {
        function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url','array'));
              $this->is_logged_in();
                
        }
        public function index(){
          
            $this->load->view('login_success.php');
        }
        public function is_logged_in(){
          $is_logged_in = $this->session->userdata('data');
          if(!isset($is_logged_in) || $is_logged_in != TRUE){
              echo 'you dont have permission to access this page<a href= "index.php/login/index">login here</a>';
          }
          die();
        }

       
       
 

}
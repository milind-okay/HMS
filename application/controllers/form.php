<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('email','E-mail','required|trim|valid_email');
                $this->form_validation->set_rules('password','Password','required|trim');
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('form');
                }
                else
                {
                        $this->load->view('formsuccess');
                }
        }
}
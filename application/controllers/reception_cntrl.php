<?php 
class Reception_cntrl extends CI_Controller{
	function __construct(){
		parent::__construct();
              
		$this->load->model('reception_model');
		 $this->load->helper('date');
                $this->load->library('form_validation');
                $this->load->library('session');  
	}
	function index()
	{
		$this->load->view('reception_main');
	}
	function discharge_p()
	{
		$this->form_validation->set_rules('p_id','p_id','required');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('discharge_patient_view');
		}
		else
		{
			$data =array(
			'p_id'=>$this->input->post('p_id')
			);
				$this->reception_model->dischage_p('inpatient',$data);
			redirect('index.php/reception_main');	
		}
	}
	function discharge_patient()
	{
		$this->load->view('discharge_patient_view');
	}
	function medicine_details()
	{
		    $error['message'] ='';
			$this->load->view('reception_view');
	}
	function medical_history()
	{
		$this->load->view('medical_history_view');
	}
	function attempt()
	{
		$this->form_validation->set_rules('description','description','required');
		$this->form_validation->set_rules('m_id','m_id','required');
		$this->form_validation->set_rules('price','price','required');
		if($this->form_validation->run()==FALSE)
		{
			//echo 'not found!';
			//$error['message'] ='re-enter the details';
			$this->load->view('reception_view');
		}
		else
		{
			$data =array(
			'm_id'=>$this->input->post('m_id'),
			'price'=>$this->input->post('price'),
			'description'=>$this->input->post('description')
			);
			$this->reception_model->medicine_insert($data);
			$this->load->view('reception_main');
		}
	}
	function attempt1()
	{
		$this->form_validation->set_rules('p_id','p_id','required');
		$this->form_validation->set_rules('m_id','m_id','required');
		$this->form_validation->set_rules('Dept','Dept','required');
		if($this->form_validation->run()==FALSE)
		{
			//echo 'not found!';
			//$error['message'] ='re-enter the details';
			$this->load->view('reception_history_view');
		}
		else
		{
			$data =array(
			'p_id'=>$this->input->post('p_id'),
			'Dept'=>$this->input->post('Dept'),
			'm_id'=>$this->input->post('m_id')
			);
			$this->reception_model->medical_history_insert($data);
			$this->load->view('reception_main');
		}
	}
	
}
?>
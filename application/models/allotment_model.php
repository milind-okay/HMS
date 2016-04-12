<?php

class Allotment_model extends CI_Model
{

	public $models = array('');

	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
		$this->load->model($this->models,'',TRUE);
	}

	
}

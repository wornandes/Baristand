<?php 

class HomeManagerOperational extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_homeManagerOperational');
	}

	function index(){
		$data['permohonan'] = $this->m_homeManagerOperational->tampilAcara()->result();
		$this->load->view('v_homeManagerOperational', $data);
	}

	

}
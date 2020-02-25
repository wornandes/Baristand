<?php 

class HomeAdmin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_homeAdmin');
	}

	function index(){
		$data['permohonan'] = $this->m_homeAdmin->tampilAcara()->result();
		$this->load->view('v_homeAdmin', $data);
	}

	

}
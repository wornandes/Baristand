<?php 

class HomeBendahara extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_homeBendahara');
	}

	function index(){
		$data['permohonan'] = $this->m_homeBendahara->tampilAcara()->result();
		$this->load->view('v_homeBendahara', $data);
	}

	

}
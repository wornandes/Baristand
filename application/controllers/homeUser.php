<?php 

class HomeUser extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_homeUser');
		$this->load->library('session');
	}

	function index(){
		$id_value = $this->session->userdata('id_user');
		$id_user = $this->m_homeUser->tampilIDPerusahaan($id_value);
		$dataPermohonan = $this->m_homeUser->tampilPermohonan($id_user)->result();
		if (empty($dataPermohonan)){
		$data['permohonan'] = "";
		$data['idPerusahaan'] = $id_user;
		$this->load->view('v_homeUser',$data);
		}
		else{
		$data['permohonan'] = $dataPermohonan;
		$this->load->view('v_homeUser', $data);
		}
	}

	
}
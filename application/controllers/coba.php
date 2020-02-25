<?php 

class coba extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_upload_billing');
	}

	function index(){
		$data['dataBilling']=$this->m_upload_billing->tampilDataBilling();
		$this->load->view('v_coba',$data);
	}

	
}
<?php 

class Tambah_tim extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_tambah_tim');
	}

	function index(){
	    $id_input = $_GET['id_input'];
		$data['id_input']=$id_input;
		$this->load->view('v_tambah_tim',$data);
	}
	function tambah_tim(){
	    $id_input = $this->input->post('id_input');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$lead_auditor = $this->input->post('lead_auditor');
		$auditor = $this->input->post('auditor');
		$ppc = $this->input->post('ppc');
		$biaya_permohonan = $this->input->post('biaya_permohonan');
		$biaya_audit_administrasi = $this->input->post('biaya_audit_administrasi');
		$biaya_audit_lapangan = $this->input->post('biaya_audit_lapangan');
		$biaya_jasa_proses = $this->input->post('biaya_jasa_proses');
		$total_biaya = $this->input->post('total_biaya');

		
		$data=array(
			'id_input'=>$id_input,
			'tgl_mulai'=>$tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'lead_auditor' => $lead_auditor,
			'auditor' => $auditor,
			'ppc' => $ppc,
			'biaya_permohonan'=>$biaya_permohonan,
			'biaya_audit_administrasi' => $biaya_audit_administrasi,
			'biaya_audit_lapangan' => $biaya_audit_lapangan,
			'biaya_jasa_proses' => $biaya_jasa_proses,
			'total_biaya' => $total_biaya
		);
		$this->m_tambah_tim->tambah_tim($data,'jadwal');
		redirect('daftar_jadwal');
	}
}
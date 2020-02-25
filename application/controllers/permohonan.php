<?php 


class Permohonan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_permohonan');
		$this->load->model('m_login');
	}

	function index(){
		$id_input = $_GET['id_input'];
		$data['permohonan'] = $this->m_permohonan->tampilPermohonan($id_input)->result();
		$this->load->view('v_permohonan', $data);
	}
	function tambahPermohonan(){
	$this->load->library('upload');
    $dataInfo = array();
    $files = $_FILES;
    $cpt = count($_FILES['userfile']['name']);
    for($i=0; $i<$cpt; $i++)
    {           
        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
        $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

        $this->upload->initialize($this->set_upload_options());
        $this->upload->do_upload('userfile');
        $dataInfo[] = $this->upload->data();
    }

    $data = array(
		'id_perusahaan'=>$this->input->post('id_perusahaan'),
		'nomor_surat'=>$this->input->post('nomor_surat'),
		'tanggal' => $this->input->post('tanggal'),
		'file_surat' => $dataInfo[0]['file_name'],
		'nama_direktur' => $this->input->post('nama_direktur'),
		'input_komoditi' => $this->input->post('input_komoditi'),
		'file_komoditi' => $dataInfo[1]['file_name'],
		'pedoman_mutu' => $dataInfo[2]['file_name'],
		'pedoman_kerja' => $dataInfo[3]['file_name'],
		'tanda_sni' => $dataInfo[4]['file_name'],
		'denah_pabrik' => $dataInfo[5]['file_name'],
		'flowchart_produksi' => $dataInfo[6]['file_name'],
		'struktur_organisasi' => $dataInfo[7]['file_name'],
		'foto_produk' => $dataInfo[8]['file_name'],
		'daftar_isian_pemohon' => $dataInfo[9]['file_name']
     );
	 $this->m_permohonan->tambahPermohonan($data,'permohonan');
	 redirect('homeUser');
	}

	private function set_upload_options(){   
		//upload an image options
		$config = array();
		$config['upload_path'] = './assets/file/permohonan';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}


}
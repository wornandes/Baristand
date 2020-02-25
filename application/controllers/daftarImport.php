<?php 



class  daftarImport extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_daftarImport');

	}

	function index(){
		$id_user = $_GET['id_user'];
		$data['id_user']=$id_user;
		$this->load->view('v_daftarImport', $data);
	}

	function daftarImport(){
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
		'id_user' => $this->input->post('id_user'),
		'tipe_jenis' => $this->input->post('tipe_jenis'),
		'bentuk_usaha' => $this->input->post('bentuk_usaha'),
		'nama_perusahaan' => $this->input->post('nama_perusahaan'),
		'alamat_kantor' => $this->input->post('alamat_kantor'),
		'alamat_pabrik' => $this->input->post('alamat_pabrik'),
		'akte_pendirian' => $this->input->post('akte_pendirian'),
		'notary_act' => $this->input->post('notary_act'),
		'license_permite' => $this->input->post('license_permite'),
		'mou' => $this->input->post('mou'),
		'pedoman_mutu' => $this->input->post('pedoman_mutu'),
		'sertifikat_iso' => $this->input->post('sertifikat_iso'),
		'illustrasi' =>$this->input->post('illustrasi'),
		'denah_pabrik' => $this->input->post('denah_pabrik'),
		'flowchart' => $this->input->post('flowchart'),
		'struktur' => $this->input->post('struktur'),
		'foto' => $this->input->post('foto'),
		'nomor_pajak' => $this->input->post('nomor_pajak'),
		'sertifikat_merek' => $this->input->post('sertifikat_merek'),
		'tanda_daftar' => $this->input->post('tanda_daftar'),
		'angka_pengenal' => $this->input->post('angka_pengenal'),
		'nama_penanggung' => $this->input->post('nama_penanggung'),
		'gambarnotary' => $dataInfo[0]['file_name'],
		'gambarlicense' => $dataInfo[1]['file_name'],
		'gambarmou' => $dataInfo[2]['file_name'],
		'gambarpedoman' => $dataInfo[3]['file_name'],
		'gambarsertifikatiso' => $dataInfo[4]['file_name'],
		'gambarillustrasi' => $dataInfo[5]['file_name'],
		'gambardenah' => $dataInfo[6]['file_name'],
		'gambarflowchart' => $dataInfo[7]['file_name'],
		'gambarstruktur' => $dataInfo[8]['file_name'],
		'gambarfoto' => $dataInfo[9]['file_name'],
		'gambarnomorpajak' => $dataInfo[10]['file_name'],
		'gambarsertifikatmerek' => $dataInfo[11]['file_name'],
		'gambartanda' => $dataInfo[12]['file_name'],
		'gambarangka' => $dataInfo[13]['file_name']
     );
	 $this->m_daftarImport->daftarImport($data,'data_perusahaan');
		redirect('login');
	}

	private function set_upload_options(){   
		//upload an image options
		$config = array();
		$config['upload_path'] = './assets/file/dataPerusahaan';
		$config['allowed_types'] = 'gif|jpg|png|pdf';
		$config['max_size']      = '0';
		$config['overwrite']     = FALSE;

		return $config;
	}

	

}
			
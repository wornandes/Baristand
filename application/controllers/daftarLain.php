<?php 



class  daftarLain extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_daftarLain');

	}

	function index(){
		$id_user = $_GET['id_user'];
		$data['id_user']=$id_user;
		$this->load->view('v_daftarLain',$data);
	}

	function daftarLain(){
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
		'nomor_pajak' => $this->input->post('nomor_pajak'),
		'tanda_daftar' => $this->input->post('tanda_daftar'),
		'surat_izinusaha' => $this->input->post('surat_izinusaha'),
		'sertifikat_merek' => $this->input->post('sertifikat_merek'),
		'angka_pengenal' => $this->input->post('angka_pengenal'),
		'sertifikat_iso' => $this->input->post('sertifikat_iso'),
		'ijin_usaha' => $this->input->post('ijin_usaha'),
		'gambarakte' => $dataInfo[0]['file_name'],
		'gambarnomorpajak' => $dataInfo[1]['file_name'],
		'gambartanda' => $dataInfo[2]['file_name'],
		'gambarsuratizin' => $dataInfo[3]['file_name'],
		'gambarsertifikatmerek' => $dataInfo[4]['file_name'],
		'gambarangka' => $dataInfo[5]['file_name'],
		'gambarsertifikatiso' => $dataInfo[6]['file_name'],
		'gambarijin' => $dataInfo[7]['file_name']
     );
	 $this->m_daftarLain->daftarLain($data,'data_perusahaan');
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
			
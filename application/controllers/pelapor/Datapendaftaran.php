<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datapendaftaran extends CI_Controller {


	public function __construct(){
		parent::__construct();

		$this->load->model('Pendaftaran');
	}

	//tambah buku
	public function tambah_data()
	{
		$this->db->where('id_pendaftaran',$this->input->post('idpendaftaran'));
		$isi=$this->db->count_all_results('data_pendaftaran');
		if($isi==0){
			$data= array (
				'id_pendaftaran' => $this->input->post('idpendaftaran'),
				'nik' => $this->input->post('nik'),
				'nama_lengkap' => $this->input->post('namalengkap'),
				'username' => $this->input->post('username'),
				'jenis_kelamin' => $this->input->post('jk'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('nohp'),
				'stts' => $this->input->post('stts'),
				);

				$this->Pendaftaran->insertData('data_pendaftaran',$data);
				redirect ('Home/kehilangan');
		}
	}
}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
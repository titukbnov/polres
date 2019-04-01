<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Laporkehilangan extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();

		$this->load->model('Pendaftaran');
	}
	public function index () 
	{
		$data['log']=$this->db->get_where('data_pendaftaran',array('username' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='pelapor')
		{	
			$this->form_validation->set_rules('nosurat', 'nosurat', 'required');
			$this->form_validation->set_rules('idpolsek', 'idpolsek', 'required');
			$this->form_validation->set_rules('idpendaftaran', 'idpendaftaran', 'required');
			$this->form_validation->set_rules('nopolisi', 'nopolisi', 'required');
			$this->form_validation->set_rules('norangka', 'norangka', 'required');
			$this->form_validation->set_rules('laporpada','laporpada', 'required');
			$this->form_validation->set_rules('lampiransim','lampiransim', 'required');
			$this->form_validation->set_rules('lampiranstnk','lampiranstnk', 'required');
			$this->form_validation->set_rules('merkkendaraan','merkkendaraan', 'required');
			$this->form_validation->set_rules('warnakendaraan','warnakendaraan', 'required');
			$this->form_validation->set_rules('tanggalhilang','tanggalhilang', 'required');
			$this->form_validation->set_rules('deskripsi','deskripsi', 'required');
			if($this->form_validation->run()==FALSE)
			{
					//$data ['err'] = validation_errors();
				$data['title']='Data Kehilangan ';
				$data['pointer']="Lapor Kehilangan";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Data Kehilangan";
				$data['sub_bread']="Input Kehilangan";
				$data['desc']="Data Master Kehilangan, Menampilkan Input Data Kehilangan";

					/*data yang ditampilkan*/
				$data['id_pendaf'] = $this->Pendaftaran->getAllData("data_pendaftaran");
				$data['id_polsek'] = $this->Pendaftaran->getAllData("polsek");
				$tmp['content']=$this->load->view('backend/pelapor/kehilangan/Create_kehilangan',$data, TRUE);
				$this->load->view('backend/pelapor/layout',$tmp);
			}
			else
			{
				$this->db->where('no_surat_kehilangan', $this->input->post('nosurat'));
				$t = $this->input->post('tanggalhilang');
				$s = substr($t,0,2);
				$s1 = substr($t,3,2);
				$s2 = substr($t,6,6);
				$s3 = $s2."/".$s.'/'.$s1;

				$isi = $this->db->count_all_results('data_laporan_kehilangan');
				if ($isi == 0) {
					$data = array
					(
						'no_surat_kehilangan' => $this->input->post('nosurat'),
						'id_polsek' => $this->input->post('idpolsek'),
						'id_pendaftaran' => $this->input->post('idpendaftaran'),
						'no_polisi' => $this->input->post('nopolisi'),
						'no_rangka' => $this->input->post('norangka'),
						'no_mesin' => $this->input->post('nomesin'),
						'melapor_pada' => $this->input->post('laporpada'),
						'lampiran_sim' => $this->input->post('lampiransim'),
						'lampiran_stnk' => $this->input->post('lampiranstnk'),
						'merk_kendaraan' => $this->input->post('merkkendaraan'),
						'warna_kendaraan' => $this->input->post('warnakendaraan'),
						'tgl_hilang' => $s3,
						'deskripsi' => $this->input->post('deskripsi'),
					);
					$query = $this->Pendaftaran->insertData('data_laporan_kehilangan', $data);
					redirect("pelapor/Laporkehilangan","refresh");
				}
			}
		}
		else
		/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'home/log');
		}
	}
}
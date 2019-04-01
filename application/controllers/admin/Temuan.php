<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Temuan extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Pendaftaran');
	}
	public function index () {
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		/*jika status login Yes dan status admin tampilkan*/
		if(!empty($cek) && $stts=='admin')
		{
			/*layout*/	
			$data['title']='Daftar Temuan';
			$data['pointer']="Polsek";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Temuan";
			$data['sub_bread']="Daftar Temuan";
			$data['desc']="Data Master Polsek, Menampilkan data Temuan Polsek";

			/*data yang ditampilkan*/
			$data['data_temuan'] = $this->Pendaftaran->getAllData("data_penemuan");
			$tmp['content']=$this->load->view('backend/admin/temuan/View_temuan',$data, TRUE);
			$this->load->view('backend/admin/layout',$tmp);
		}
		else
		/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'home/log');
		}
	}

	public function create()
	{
		
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$this->form_validation->set_rules('idpenemuan', 'idpenemuan', 'required');
			$this->form_validation->set_rules('nosurat', 'nosurat', 'required');
			$this->form_validation->set_rules('tgltemuan', 'tgltemuan', 'required');
			$this->form_validation->set_rules('lokasitemuan', 'lokasitemuan', 'required');
			$this->form_validation->set_rules('temuanpolres', 'temuanpolres', 'required');
			$this->form_validation->set_rules('temuanpolsek','temuanpolsek', 'required');
			$this->form_validation->set_rules('status','status', 'required');
			$this->form_validation->set_rules('deskripsi','deskripsi', 'required');
			if($this->form_validation->run()==FALSE)
			{
					//$data ['err'] = validation_errors();
				$data['title']='Tambah Temuan';
				$data['pointer']="Temuan";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Tambah Temuan";
				$data['sub_bread']="Input Temuan";
				$data['desc']="Data Master Temuan, Menginput data Temuan Polres / Polsek";
					/*data yang ditampilkan*/
					
				$data['surat_no'] = $this->Pendaftaran->getAllData("data_laporan_kehilangan");
				$tmp['content']=$this->load->view('backend/admin/temuan/Create_temuan',$data, TRUE);
				$this->load->view('backend/admin/layout',$tmp);
			}
			else 
			{
				$this->db->where('id_penemuan',$this->input->post('idpenemuan'));

				$t= $this->input->post('tgltemuan');	
				$s=substr($t,0,2);
				$s1=substr($t,3,2);
				$s2=substr($t,6,6);
				$s3=$s2."/".$s.'/'.$s1;

				$isi=$this->db->count_all_results('data_penemuan');
				if ($isi == 0) {
				$data = array('id_penemuan' => $this->input->post('idpenemuan'),
					           'no_surat_kehilangan' => $this->input->post('nosurat'),
					           'tgl_temuan' => $s3,
					           'lokasi_temuan' => $this->input->post('lokasitemuan'),
					           'temuan_polres' => $this->input->post('temuanpolres'),
					           'temuan_polsek' => $this->input->post('temuanpolsek'),
					           'status' => $this->input->post('status'),
					           'deskripsi' => $this->input->post('deskripsi'),
					        );
							$quer=$this->Pendaftaran->insertData('data_penemuan',$data);
							redirect("admin/Temuan","refresh");
				}
			}
		}
		else
			/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'home/log');
		}
	}

	public function hapus_temuan()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$id_penemuan = $this->input->get('id_penemuan', TRUE);			
			$hapus = array('id_penemuan' => $id_penemuan);
			
			$this->Pendaftaran->deleteData('data_penemuan',$hapus);
			header('location:'.base_url().'admin/Temuan');
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	public function edit_temuan()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$id_penemuan = $this->input->get('id_penemuan', TRUE);	
				
			/*layout*/	
				$data['title']='Edit Temuan';
				$data['pointer']="admin/temuan";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Temuan";
				$data['sub_bread']="Edit Temuan";
				$data['desc']="Form untuk melakukan edit data Temuan";

				/*data yang ditampilkan*/
				$data['d_temuan'] = $this->Pendaftaran->get_detail('data_penemuan','id_penemuan', $id_penemuan);
				
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('backend/admin/temuan/U_temuan',$data, TRUE);
				$this->load->view('backend/admin/layout',$tmp);		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}
	
	public function update_temuan()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$this->form_validation->set_rules('idpenemuan', 'idpenemuan', 'required');
			$this->form_validation->set_rules('nosurat', 'nosurat', 'required');
			$this->form_validation->set_rules('tgltemuan', 'tgltemuan', 'required');
			$this->form_validation->set_rules('lokasitemuan', 'lokasitemuan', 'required');
			$this->form_validation->set_rules('temuanpolres', 'temuanpolres', 'required');
			$this->form_validation->set_rules('temuanpolsek','temuanpolsek', 'required');
			$this->form_validation->set_rules('status','status', 'required');
			$this->form_validation->set_rules('deskripsi','deskripsi', 'required');
			
			$id_polsek=$this->input->post('idpenemuan');
		
			
			if ($this->form_validation->run() === FALSE)
			{
				$data['title']='Edit Temuan';
				$data['pointer']="polsek/polsek";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Temuan";
				$data['sub_bread']="Edit Temuan";
				$data['desc']="Form untuk melakukan edit data Temuan";
				/*data yang ditampilkan*/
				$data['d_temuan'] = $this->Pendaftaran->get_detail('data_penemuan','id_penemuan', $id_penemuan);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('backend/admin/temuan/U_temuan',$data, TRUE);
				$this->load->view('backend/admin/layout',$tmp);		
			}
			else
			{
				$data= array (
							'id_penemuan' => $this->input->post('idpenemuan'),
					           'no_surat_kehilangan' => $this->input->post('nosurat'),
					           'tgl_temuan' => $s3,
					           'lokasi_temuan' => $this->input->post('lokasitemuan'),
					           'temuan_polres' => $this->input->post('temuanpolres'),
					           'temuan_polsek' => $this->input->post('temuanpolsek'),
					           'status' => $this->input->post('status'),
					           'deskripsi' => $this->input->post('deskripsi'),
					           );

				$this->Pendaftaran->updateData('data_penemuan',$data,$id_penemuan,'id_penemuan');
				redirect('admin/Temuan','refresh');
				

			}
		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}
}

?>
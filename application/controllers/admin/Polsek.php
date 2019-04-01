<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Polsek extends CI_Controller {
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
			$data['title']='Daftar Polsek';
			$data['pointer']="Polsek";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Polsek";
			$data['sub_bread']="Daftar Polsek";
			$data['desc']="Data Master Admin, Menampilkan data Polsek";

			/*data yang ditampilkan*/
			$data['data_polsek'] = $this->Pendaftaran->getAllData("polsek");
			$tmp['content']=$this->load->view('backend/admin/polsek/View_polsek',$data, TRUE);
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
			$this->form_validation->set_rules('idpolsek', 'idpolsek', 'required');
			$this->form_validation->set_rules('namapolsek', 'namapolsek', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('hp', 'hp', 'required');
			$this->form_validation->set_rules('pass', 'pass', 'required');
			if($this->form_validation->run()==FALSE)
			{
					//$data ['err'] = validation_errors();
				$data['title']='Tambah Polsek';
				$data['pointer']="Polsek";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Data Polsek";
				$data['sub_bread']="Input Polsek";
				$data['desc']="Data Master Polsek, Menampilkan data Polsek";

					/*data yang ditampilkan*/
				$tmp['content']=$this->load->view('backend/admin/polsek/Create_polsek',$data,true);
				$this->load->view('backend/admin/layout',$tmp);
			}
			else 
			{
				$this->db->where('id_polsek',$this->input->post('idpolsek'));
				$isi=$this->db->count_all_results('polsek');
				if ($isi == 0) {
				$data = array('id_polsek' => $this->input->post('idpolsek'),
					           'nama_polsek' => $this->input->post('namapolsek'),
					           'alamat_polsek' => $this->input->post('alamat'),
					           'no_telp_polsek' => $this->input->post('hp'),
					           );
							$quer=$this->Pendaftaran->insertData('polsek',$data);
							$data2 = array('username' => $this->input->post('idpolsek'),
											'password'=> $this->input->post('pass'),
											'stts'=>$this->input->post('stts'));
							$quer1=$this->Pendaftaran->insertData('tb_login',$data2);
							redirect("admin/polsek","refresh");
				}
			}
		}
		else
			/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'home/log');
		}
	}

	public function hapus_polsek()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{
			$id_polsek = $this->input->get('id_polsek', TRUE);			
			$hapus = array('id_polsek' => $id_polsek);
			
			$this->Pendaftaran->deleteData('polsek',$hapus);
			header('location:'.base_url().'admin/Polsek');
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	public function edit_polsek()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$id_polsek = $this->input->get('id_polsek', TRUE);	
				
			/*layout*/	
				$data['title']='Edit Polsek';
				$data['pointer']="polsek/polsek";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Polsek";
				$data['sub_bread']="Edit Polsek";
				$data['desc']="Form untuk melakukan edit data Polsek";

				/*data yang ditampilkan*/
				$data['d_polsek'] = $this->Pendaftaran->get_detail('polsek','id_polsek', $id_polsek);
				
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('backend/admin/polsek/U_polsek',$data, TRUE);
				$this->load->view('backend/admin/layout',$tmp);		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}

	public function update_polsek()
	{
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
			$this->form_validation->set_rules('idpolsek', 'idpolsek', 'required');
			$this->form_validation->set_rules('namapolsek', 'namapolsek', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('hp', 'hp', 'required');
			
			$id_polsek=$this->input->post('idpolsek');
		
			
			if ($this->form_validation->run() === FALSE)
			{
				$data['title']='Edit Polsek';
				$data['pointer']="polsek/polsek";
				$data['classicon']="fa fa-book";
				$data['main_bread']="Daftar Polsek";
				$data['sub_bread']="Edit Polsek";
				$data['desc']="Form untuk melakukan edit data Polsek";
				/*data yang ditampilkan*/
				$data['d_polsek'] = $this->Pendaftaran->get_detail('polsek','id_polsek', $id_polsek);
				
				/*masukan data kedalam view */
				$tmp['content']=$this->load->view('backend/admin/polsek/U_polsek',$data, TRUE);
				$this->load->view('backend/admin/layout',$tmp);		
			}
			else
			{
				$data= array (
							'id_polsek' => $this->input->post('idpolsek'),
					        'nama_polsek' => $this->input->post('namapolsek'),
					        'alamat_polsek' => $this->input->post('alamat'),
					        'no_telp_polsek' => $this->input->post('hp'),
					           );

				$this->Pendaftaran->updateData('polsek',$data,$id_polsek,'id_polsek');
				redirect('admin/Polsek','refresh');
				

			}
		
		}
		else
		{
			header('location:'.base_url().'web/log');
		}
	}
}
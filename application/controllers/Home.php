<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Pendaftaran');
	}

	public function index() {
		$this->load->view('header.php');
		$this->load->view('a_content');
		$this->load->view('footer.php');
	}

	public function profil() {
		$this->load->view('header.php');
		$this->load->view('front/profil.php');
		$this->load->view('footer.php');
	}

	public function polres() {
		$this->load->view('header.php');
		$this->load->view('front/polres.php');
		$this->load->view('footer.php');
	}

	public function polsek() {
		$this->load->view('header.php');
		$this->load->view('front/polsek.php');
		$this->load->view('footer.php');
	}

	public function informasi() {
		$this->load->view('header');
		$data['data_temuan'] = $this->Pendaftaran->getAllData("data_penemuan");
		$this->load->view('front/informasi',$data);
		$this->load->view('footer');
	}

	public function kehilangan() {
		$this->load->view('header.php');
		$this->load->view('front/kehilangan.php');
		$this->load->view('footer.php');
	}

	public function log() {
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			//buat atribut form
			$frm['username'] = array('name' => 'username',
				'id' => 'username',
				'type' => 'text',
				'value' => '',
				'class' => 'form-control',
				'placeholder' => 'Username'
			);
			$frm['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
				'value' => '',
				'class' => 'form-control',
				'placeholder' => 'Password'
			);
			$frm['title']='Login & Register';
			$tmp['content']=$this->load->view('backend/login',$frm);
		}
		else
		{
			$st = $this->session->userdata('stts');
			echo $s = $this->session->userdata('username');
			if($st=='admin')
			{				
				header('location:'.base_url().'admin/Home');
			}
			else if($st=='pelapor')
			{
				header('location:'.base_url().'pelapor/Home');
			}
			else if($st=='petugas')
			{
				header('location:'.base_url().'petugas/Home');
			}
		}
	}

	public function login()
	{
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->Polres_model->getLoginData($u,$p);
		$this->Polres_model->getLoginPelapor($u,$p);
	}

	public function logout()
	{
		$cek = $this->session->userdata('logged_in');
		if(empty($cek))
		{
			header('location:'.base_url().'home/log');
		}
		else
		{		
			$this->session->sess_destroy();
			header('location:'.base_url().'home/log');	
		}
	}
}
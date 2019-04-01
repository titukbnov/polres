<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Pelapor extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->model('Pendaftaran');
	}

	public function index () {
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');

		if (!empty($cek) && $stts=='admin')
		{
			$data['title']='Daftar Pelapor';
			$data['pointer']='Pelapor';
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Pelapor";
			$data['sub_bread']="Daftar Pelapor";
			$data['desc']="Data Master Admin, Menampilkan Data Pelapor";

			$data['data_pelapor'] = $this->Pendaftaran->getAllData("data_pendaftaran");
			$tmp['content']=$this->load->view('backend/admin/pelapor/View_pelapor',$data, TRUE);
			$this->load->view('backend/admin/layout',$tmp);
		}
		else {
			header('location:'.base_url().'home/log');
		}
	}
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Laporkehilangan extends CI_Controller {
	public function __construct() {
		parent::__construct();

		$this->load->model('Pendaftaran');
	}
	public function index () {
		$data['log']=$this->db->get_where('tb_login',array('stts' => $this->session->userdata('username')))->result();
		$cek = $this->session->userdata('logged_in');
		$stts = $this->session->userdata('stts');
		if(!empty($cek) && $stts=='admin')
		{	
					//$data ['err'] = validation_errors();
			$data['title']='Data Kehilangan ';
			$data['pointer']="Lapor Kehilangan";
			$data['classicon']="fa fa-book";
			$data['main_bread']="Data Kehilangan";
			$data['sub_bread']="Input Kehilangan";
			$data['desc']="Data Master Kehilangan, Menampilkan Input Data Kehilangan";

					/*data yang ditampilkan*/
			$data['polsek'] = $this->Pendaftaran->getAllData("polsek");
			$data['data_pendaftaran'] = $this->Pendaftaran->getAllData("data_pendaftaran");
			$data['data_kehilangan'] = $this->Pendaftaran->getAllData("data_laporan_kehilangan");
			$tmp['content']=$this->load->view('backend/admin/kehilangan/View_kehilangan',$data, TRUE);
			$this->load->view('backend/admin/layout',$tmp);
		}
		else
		/*jika status login NO atau status bukan admin kembalikan ke login*/
		{
			header('location:'.base_url().'home/log');
		}
	}
}
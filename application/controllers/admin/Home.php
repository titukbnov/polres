<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	//home default
	public function index(){
		$data['title']='Admin Home';
		$data['pointer']="Home";
		$data['classicon']="fa fa-home";
		$data['main_bread']="Home";
		$data['sub_bread']="Dashboard";
		$data['desc']="Overview";
		$data['log']=$this->db->get_where('tb_login',array('username' => $this->session->userdata('username')))->result();
    
    	$data['warna']=	array('#f56954','#00a65a','#f39c12','#00c0ef','#3c8dbc','#d2d6de', '#d9f442','#561d84','#f90ec3', '#31f7a4');
		$tmp['content']=$this->load->view('backend/admin/home',$data, TRUE);
		$this->load->view('backend/admin/layout',$tmp);
	}
}
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */
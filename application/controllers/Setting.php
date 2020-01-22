<?php 
 
class Setting extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');
 
	}
 
	function index(){
		redirect(base_url('dashboard'));
	}
 
	function status(){
		$status = $this->uri->segment('3');
		if ($status==1) {
			$data_session = array(
				'nama' => $this->session->login['nama'],
				'status' => $this->session->login['nama'],
				'jabatan' => $this->session->login['nama'],
				'pengadaan' => 1
			);
		}else{
			$data_session = array(
				'nama' => $this->session->login['nama'],
				'status' => $this->session->login['nama'],
				'jabatan' => $this->session->login['nama'],
				'pengadaan' => 0
			);
		}
		$this->session->set_userdata('login',$data_session);
	 	$data = array(
			'status' => $status
	 	);
	 	$this->M_Login->update_data($data,'tb_pengadaan_setting');
		redirect('dashboard/index');
	}


}
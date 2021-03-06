<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_Login');
 
	}
 
	function index(){
		$this->load->view('v_login/login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->M_Login->cek_login("tb_user",$where)->num_rows();
		$pengadaan = $this->M_Login->getpengadaan()->row_array();
		$jabatan = $this->M_Login->getjabatan("tb_user",$where);
		$role = $jabatan["jabatan"];
		$test = $pengadaan['status'];
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'jabatan' => $role,
				'pengadaan' => $test
				);
 
			$this->session->set_userdata('login',$data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}

	function bukti(){
		$pengadaan = $this->M_Login->getpengadaan()->row_array();
		$test = $pengadaan['status'];
		print_r($test);
	}
 
	function logout(){
		$data_session = array(
				'nama' => "",
				'status' => "",
				'jabatan' => ""
				);
 
		$this->session->unset_userdata($data_session);
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
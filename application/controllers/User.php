<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user','user');		
	}

	function index()
	{
		$data['tb_user'] = $this->user->GetDataUser()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_User/index',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_user/add');
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$no_telp = $this->input->post('no_telp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'no_telp' => $no_telp,
			'username' => $username,
			'password' => md5($password)
			);
		$this->user->input_data($data,'tb_user');
		redirect('user/index');
	}

	function edit($nip)
	{
		$where = array('nip' => $nip);
		$data['tb_user'] = $this->user->edit_data($where,'tb_user')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_user/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$jabatan = $this->input->post('jabatan');
		$no_telp = $this->input->post('no_telp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nip' => $nip,
			'nama' => $nama,
			'jabatan' => $jabatan,
			'no_telp' => $no_telp,
			'username' => $username,
			'password' => md5($password)
		);
		$where = array(
			'nip' => $nip
		);
		$this->user->update_data($where,$data,'tb_user');
	 	redirect('user/index');
	}

	function hapus($nip)
	{
		$where = array('nip' => $nip);
 		$this->user->hapus_data($where,'tb_user');
 		redirect('user/index');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bangunan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_bangunan','bangunan');			
	}

	function index()
	{
		$data['data'] = $this->bangunan->getbangunan()->result();
		$this->load->view('templates/header');
		$this->load->view('v_bangunan/index', $data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bangunan/add');
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$data = array(
			'nama_bangunan' => $this->input->post('nama_bangunan'),
			'lokasi' => $this->input->post('lokasi'),
			'luas' => $this->input->post('luas'),
			'keterangan' => $this->input->post('keterangan'),
			);
		$this->bangunan->input_data($data, 'tb_bangunan');
		redirect('bangunan/index');
	}

	function edit($id)
	{
		$where = array('id_bangunan' => $id);
		$data['data'] = $this->bangunan->edit_data($where, 'tb_bangunan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bangunan/edit', $data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$where = array('id_bangunan' => $this->input->post('id_bangunan'));
		$data = array(
			'nama_bangunan' => $this->input->post('nama_bangunan'),
			'lokasi' => $this->input->post('lokasi'),
			'luas' => $this->input->post('luas'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->bangunan->update_data($where,$data,'tb_bangunan');
		redirect('bangunan/index');
	}

	// function hapus($id_bg_mesin){
 // 		redirect('bangunan/index');
	// }

}

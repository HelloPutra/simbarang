<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bgbangunan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_bg_bangunan','bagian');			
	}

	function index()
	{
		$data['data'] = $this->bagian->getbangunan()->result();
		$this->load->view('templates/header');
		$this->load->view('v_bg_bangunan/index', $data);
		$this->load->view('templates/footer');
	}

	function show($id)
	{
		$where = array('id_bangunan' => $id);
		$data['data'] = $this->bagian->getbyid($where)->result();
		$data['bangunan'] = $this->bagian->getbyidbangunan($where)->result();
		$this->load->view('templates/header');
		$this->load->view('v_bg_bangunan/show', $data);
		$this->load->view('templates/footer');
	}

	function tambah($id)
	{
		$where = array('id_bangunan' => $id);
		$data['bangunan'] = $this->bagian->getbyidbangunan($where)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bg_bangunan/add', $data );
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$data = array(
			'id_bangunan' => $this->input->post('id_bangunan'),
			'nama_bagian' => $this->input->post('nama_bagian'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan'),
			);
		$this->bagian->input_data($data, 'tb_bg_bangunan');
		redirect(base_url('bgbangunan/show/').$this->input->post('id_bangunan'));
	}

	function edit($id)
	{
		// echo $this->uri->segment('3');
		$where = array('id_bg_bangunan' => $id);
		$data['data'] = $this->bagian->edit_data($where, 'tb_bg_bangunan')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bg_bangunan/edit', $data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$where = array('id_bg_bangunan' => $this->input->post('id_bg_bangunan'));
		$data = array(
			'nama_bagian' => $this->input->post('nama_bagian'),
			'status' => $this->input->post('status'),
			'keterangan' => $this->input->post('keterangan'),
		);
		$this->bagian->update_data($where,$data,'tb_bg_bangunan');
		redirect(base_url('bgbangunan/show/').$this->input->post('id_bangunan'));
	}

	function hapus(){
		$where = array('id_bg_bangunan' => $this->uri->segment('4'));
		$this->bagian->hapus_data($where,'tb_bg_bangunan');
		redirect(base_url('bgbangunan/show/').$this->uri->segment('3'));
	}

}

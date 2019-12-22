<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_asset','asset');
		$this->load->model('M_kategori','kategori');			
	}

	function index()
	{
		$data['tb_kategori'] = $this->kategori->GetDataKategori()->result();
		$this->load->view('templates/header');
		$this->load->view('v_kategori/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_kategori/add');
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		$data = array(
			'id_kategori' => $id_kategori,
			'nama_kategori' => $nama_kategori
			);
		$this->kategori->input_data($data,'tb_kategori');
		$this->session->set_flashdata('message1', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil!</strong> Proses Berhasil Dijalankan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('kategori/index');
	}

	function edit($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
	 	$data['tb_kategori'] = $this->kategori->GetDataKategori()->result();
	 	$data['edit_asset'] = $this->asset->GetDataAsset()->result();
	 	$data['tb_kategori'] = $this->kategori->edit_data($where,'tb_kategori')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_kategori/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
	 	$data = array(
	 		'id_kategori' => $id_kategori,
			'nama_kategori' => $nama_kategori
	 	);
	 	$where = array(
	 		'id_kategori' => $id_kategori
	 	);
	 	$this->kategori->update_data($where,$data,'tb_kategori');
	 	$this->session->set_flashdata('message1', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil!</strong> Proses Berhasil Dijalankan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
	 	redirect('kategori/index');
	}

	function hapus($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
 		$this->kategori->hapus_data($where,'tb_kategori');
 		$this->session->set_flashdata('message1', '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Berhasil!</strong> Proses Berhasil Dijalankan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
 		redirect('kategori/index');
	}

}

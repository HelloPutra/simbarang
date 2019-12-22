<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bgmesin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_bgmesin','mesin');			
	}

	function index()
	{
		$data['mesin'] = $this->mesin->GetDataBgmesin()->result();
		$this->load->view('templates/header');
		$this->load->view('v_bagian/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['mesin'] = $this->mesin->getMesin()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bagian/add',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$id_bg_mesin = $this->input->post('id_bg_mesin');
		$id_asset = $this->input->post('id_asset');
		$nama_bagian = $this->input->post('nama_bagian');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'id_bg_mesin' => $id_bg_mesin,
			'id_asset' => $id_asset,
			'nama_bagian' => $nama_bagian,
			'status' => $status,
			'keterangan' => $keterangan

			);
		$this->mesin->input_data($data,'tb_bg_mesin');
		redirect('bgmesin/index');
	}

	function edit($id_bg_mesin)
	{
		$data['mesin'] = $this->mesin->getMesin()->result();
	 	$where = array('id_bg_mesin' => $id_bg_mesin);
	 	$data['tb_bg_mesin'] = $this->mesin->GetDataBgmesin()->result();
	 	$data['edit_asset'] = $this->mesin->getMesin()->result();
	 	$data['tb_bg_mesin'] = $this->mesin->edit_data($where,'tb_bg_mesin')->result();
		$data['selected'] = $this->mesin->GetSelected($id_bg_mesin)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_bagian/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
	 	$id_bg_mesin = $this->input->post('id_bg_mesin');
		$id_asset = $this->input->post('id_asset');
		$nama_bagian = $this->input->post('nama_bagian');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
	 	$data = array(
	 		'id_bg_mesin' => $id_bg_mesin,
			'id_asset' => $id_asset,
			'nama_bagian' => $nama_bagian,
			'status' => $status,
			'keterangan' => $keterangan
	 	);
	 	$where = array(
	 		'id_bg_mesin' => $id_bg_mesin
	 	);
	 	$this->mesin->update_data($where,$data,'tb_bg_mesin');
		redirect('bgmesin/index');
	}

	function hapus($id_bg_mesin){
		$where = array('id_bg_mesin' => $id_bg_mesin);
 		$this->mesin->hapus_data($where,'tb_bg_mesin');
 		redirect('bgmesin/index');
	}

}

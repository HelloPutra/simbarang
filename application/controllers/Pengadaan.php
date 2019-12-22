<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Pengadaan','pengadaan');			
	}

	function index()
	{
		$data['tb_pengadaan'] = $this->pengadaan->GetDataPengadaan()->result();
		$this->load->view('templates/header');
		$this->load->view('v_pengadaan/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['tb_asset'] = $this->pengadaan->GetDataAsset()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_pengadaan/add',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$id_pengadaan = $this->input->post('id_pengadaan');
		$id_asset = $this->input->post('id_asset');
		$tgl_pengadaan = $this->input->post('tgl_pengadaan');
		$jumlah_kebutuhan = $this->input->post('jumlah_kebutuhan');
		$keterangan = $this->input->post('keterangan');	
		$q = $this->pengadaan->GetHarga($id_asset);
		$total='';
		 foreach ($q->result() as $data) {
		 	$total = $data->harga_asset * $jumlah_kebutuhan;
		 }
		$data = array(
			'id_asset' => $id_asset,
			'tgl_pengadaan' => $tgl_pengadaan,
			'jumlah_kebutuhan' => $jumlah_kebutuhan,
			'total_harga' => $total,
			'status' => 'Pending',
			'keterangan' => $keterangan

			);
		$this->pengadaan->input_data($data,'tb_pengadaan');
		redirect('pengadaan/index');
	}

	function edit($id_pengadaan)
	{
		$where = array('id_pengadaan' => $id_pengadaan);
	 	$data['tb_pengadaan'] = $this->pengadaan->GetDataPengadaan()->result();
	 	$data['edit_asset'] = $this->pengadaan->GetDataAsset()->result();
	 	$data['tb_pengadaan'] = $this->pengadaan->edit_data($where,'tb_pengadaan')->result();
	 	$data['selected'] = $this->pengadaan->GetSelected($id_pengadaan)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_pengadaan/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$id_pengadaan = $this->input->post('id_pengadaan');
		$id_asset = $this->input->post('id_asset');
		$tgl_pengadaan = $this->input->post('tgl_pengadaan');
		$jumlah_kebutuhan = $this->input->post('jumlah_kebutuhan');
		$keterangan = $this->input->post('keterangan');
		$q = $this->pengadaan->GetHarga($id_asset);
		$total='';
		 foreach ($q->result() as $data) {
		 	$total = $data->harga_asset * $jumlah_kebutuhan;
		 }
	 	$data = array(
	 		'id_pengadaan' => $id_pengadaan,
			'id_asset' => $id_asset,
			'tgl_pengadaan' => $tgl_pengadaan,
			'jumlah_kebutuhan' => $jumlah_kebutuhan,
			'total_harga' => $total,
			'keterangan' => $keterangan
	 	);
	 	$where = array(
	 		'id_pengadaan' => $id_pengadaan
	 	);
	 	$this->pengadaan->update_data($where,$data,'tb_pengadaan');
	 	redirect('pengadaan/index');
	}

	function hapus($id_pengadaan)
	{
		$where = array('id_pengadaan' => $id_pengadaan);
 		$this->pengadaan->hapus_data($where,'tb_pengadaan');
 		redirect('pengadaan/index');
	}

}

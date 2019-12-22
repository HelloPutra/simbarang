<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_pengeluaran','keluar');			
	}

	function index()
	{
		$data['tb_keluar'] = $this->keluar->GetDataPengeluaran()->result();
		$this->load->view('templates/header');
		$this->load->view('v_pengeluaran/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['tb_asset'] = $this->keluar->GetDataAsset()->result();
		
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_pengeluaran/add',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}
	 
	function tambah_aksi(){
		$id_keluar = $this->input->post('id_keluar');
		$id_asset = $this->input->post('id_asset');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$jumlah_keluar = $this->input->post('jumlah_keluar');
		$q = $this->keluar->GetJumlah($id_asset);
		$totjum='';
		 foreach ($q->result() as $data) {
		 	$totjum = $data->jumlah - $jumlah_keluar;
		 }
		$data = array(
			'id_keluar' => $id_keluar,
			'id_asset' => $id_asset,
			'tgl_keluar' => $tgl_keluar,
			'jumlah_keluar' => $jumlah_keluar
			);
		$where2 = array(
	 		'id_asset' => $id_asset
	 	);
		$data2 = array(
			'jumlah' => $totjum
			);
		$this->keluar->update_data($where2,$data2,'tb_asset');
		$this->keluar->input_data($data,'tb_keluar');
		redirect(base_url('pengeluaran/index'));
	}

	function edit($id_keluar)
	{
		$where = array('id_keluar' => $id_keluar);
	 	$data['tb_keluar'] = $this->keluar->GetDataPengeluaran()->result();
	 	$data['edit_asset'] = $this->keluar->GetDataAsset()->result();
	 	$data['tb_keluar'] = $this->keluar->edit_data_asset($where,'tb_keluar')->result();
		$data['selected'] = $this->keluar->GetSelected($id_keluar)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_pengeluaran/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
	 	$id_keluar = $this->input->post('id_keluar');
		$id_asset = $this->input->post('id_asset');
		$tgl_keluar = $this->input->post('tgl_keluar');
		$jumlah_keluar = $this->input->post('jumlah_keluar');
		$q = $this->keluar->GetJumlah($id_asset);
		$totjum='';
		 foreach ($q->result() as $data) {
		 	$totjum = $data->jumlah - $jumlah_keluar;
		 }
	 	$data = array(
	 		'id_keluar' => $id_keluar,
			'id_asset' => $id_asset,
			'tgl_keluar' => $tgl_keluar,
			'jumlah_keluar' => $jumlah_keluar
	 	);
	 	$where2 = array(
	 		'id_asset' => $id_asset
	 	);
		$data2 = array(
			'jumlah' => $totjum
			);
		$this->keluar->update_data_asset($where2,$data2,'tb_asset');
	 	$where = array(
	 		'id_keluar' => $id_keluar
	 	);
	 	$this->keluar->update_data($where,$data,'tb_keluar');
	 	redirect(base_url('pengeluaran/index'));
	}

	function hapus($id_keluar){
		$where = array('id_keluar' => $id_keluar);
 		$this->keluar->hapus_data($where,'tb_keluar');
 		redirect(base_url('pengeluaran/index'));
	}

}

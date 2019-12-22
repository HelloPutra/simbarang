<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('M_Bgmesin');
		$this->load->model('M_mesin','mesin');
	}
	
	public function index()
	{
		
		$data['mesin'] = $this->mesin->GetDataAssetMesin()->result();
		$this->load->view('templates/header');
		$this->load->view('v_mesin/index',$data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['tb_bg_mesin'] = $this->mesin->GetDetail($id)->result();
		$data['nama'] = $this->mesin->getnama($id)->result();
		$this->load->view('templates/header');
		$this->load->view('v_mesin/detail',$data);
		$this->load->view('templates/footer');
	}

	function edit($id_bg_mesin){
	 	$data['mesin'] = $this->mesin->getMesin()->result();
	 	$where = array('id_bg_mesin' => $id_bg_mesin);
	 	$data['tb_bg_mesin'] = $this->mesin->GetDataBgmesin()->result();
	 	$data['edit_asset'] = $this->mesin->GetDataAsset()->result();
	 	$data['tb_bg_mesin'] = $this->mesin->edit_data_bgmesin($where,'tb_bg_mesin')->result();
		$data['selected'] = $this->mesin->GetSelected($id_bg_mesin)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_mesin/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	 }
	 function update(){
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
	 	$this->mesin->update_data_bgmesin($where,$data,'tb_bg_mesin');
	 	$u = 'mesin/detail/'.$id_asset;
	 	redirect($u);
	 }
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Perbaikan','perbaikan');			
	}

	function index()
	{
		$data['tb_perbaikan'] = $this->perbaikan->GetDataPerbaikan()->result();
		$this->load->view('templates/header');
		$this->load->view('v_perbaikan/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['tb_asset'] = $this->perbaikan->GetMesin()->result();
		$data['tb_bg_mesin'] = $this->perbaikan->getBagMesin()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_perbaikan/add',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$id_perbaikan = $this->input->post('id_perbaikan');
		$id_asset = $this->input->post('id_asset');
		$id_bg_mesin = $this->input->post('id_bg_mesin');
		$tgl_perbaikan = $this->input->post('tgl_perbaikan');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$jumlah_perbaikan = $this->input->post('jumlah_perbaikan');
		$biaya_perbaikan = $this->input->post('biaya_perbaikan');
		$status = 'Pending';
		$data = array(
			'id_perbaikan' => $id_perbaikan,
			'id_asset' => $id_asset,
			'id_bg_mesin' => $id_bg_mesin,
			'tgl_perbaikan' => $tgl_perbaikan,
			'tgl_selesai' => $tgl_selesai,
			'jumlah_perbaikan' => $jumlah_perbaikan,
			'biaya_perbaikan' => $biaya_perbaikan,
			'status' => $status

			);
		$this->perbaikan->input_data($data,'tb_perbaikan');
		redirect('perbaikan/index');
	}

	function edit($id_perbaikan)
	{
		$where = array('id_perbaikan' => $id_perbaikan);
	 	$data['edit_asset'] = $this->perbaikan->GetMesin()->result();
	 	$data['tb_perbaikan_where'] = $this->perbaikan->edit_data($where,'tb_perbaikan')->result();
	 	$data['selected'] = $this->perbaikan->GetSelected($id_perbaikan)->result();
	 	$data['tb_bg_mesin'] = $this->perbaikan->getBagMesin()->result();
	 	$this->load->view('templates/header');
	 	$this->load->view('templates/card_header');
	 	$this->load->view('v_perbaikan/edit',$data);
	 	$this->load->view('templates/card_footer');
	 	$this->load->view('templates/footer');
	}

	function update()
	{
		$id_perbaikan = $this->input->post('id_perbaikan');
		$id_asset = $this->input->post('id_asset');
		$id_bg_mesin = $this->input->post('id_bg_mesin');
		$tgl_perbaikan = $this->input->post('tgl_perbaikan');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$jumlah_perbaikan = $this->input->post('jumlah_perbaikan');
		$biaya_perbaikan = $this->input->post('biaya_perbaikan');
		$status = 'Pending';
	 	$data = array(
	 		'id_perbaikan' => $id_perbaikan,
			'id_asset' => $id_asset,
			'id_bg_mesin' => $id_bg_mesin,
			'tgl_perbaikan' => $tgl_perbaikan,
			'tgl_selesai' => $tgl_selesai,
			'jumlah_perbaikan' => $jumlah_perbaikan,
			'biaya_perbaikan' => $biaya_perbaikan,
			'status' => $status
	 	);
	 	$where = array(
	 		'id_perbaikan' => $id_perbaikan
	 	);
	 	$this->perbaikan->update_data($where,$data,'tb_perbaikan');
	 	redirect('perbaikan/index');
	}

	function hapus($id_perbaikan)
	{
		$where = array('id_perbaikan' => $id_perbaikan);
 		$this->perbaikan->hapus_data($where,'tb_perbaikan');
 		redirect('perbaikan/index');
	}

}

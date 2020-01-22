<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan_bangunan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('P_bangunan','repair');			
	}

	function index()
	{
		$data['data'] = $this->repair->get()->result();
		$this->load->view('templates/header');
		$this->load->view('v_perbaikan_bangunan/index',$data);
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['data'] = $this->repair->getrusak()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_perbaikan_bangunan/add', $data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$data = array(
			'id_bg_bangunan' => $this->input->post('id_bg_bangunan'),
			'biaya' => $this->input->post('biaya'),
			'tgl_perbaikan' => $this->input->post('tgl_perbaikan'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'status' => 'Pending'
			);
		$this->repair->input_data($data, 'tb_perbaikan_bangunan');
		redirect('perbaikan_bangunan/index');
	}

	function edit($id)
	{
		$where = array('id_perbaikan_bangunan' => $id);
		$data['data'] = $this->repair->edit_data($where)->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_perbaikan_bangunan/edit', $data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$where = array('id_perbaikan_bangunan' => $this->input->post('id_perbaikan_bangunan'));
		$data = array(
			'biaya' => $this->input->post('biaya'),
			'tgl_perbaikan' => $this->input->post('tgl_perbaikan'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
			'status' => 'Pending'
			);
		$this->repair->update_data($where,$data,'tb_perbaikan_bangunan');
		redirect('perbaikan_bangunan/index');
	}

	function hapus($id){
		$where = array('id_perbaikan_bangunan' => $id);
		$this->repair->hapus_data($where,'tb_perbaikan_bangunan');
 		redirect('perbaikan_bangunan/index');
	}

	function fungsi_proses($id_perbaikan_bangunan)
	{
		$data = array(
			'status' => 'Diproses'
	 	);
	 	$where = array(
	 		'id_perbaikan_bangunan' => $id_perbaikan_bangunan
	 	);
	 	$this->repair->update_data($where,$data,'tb_perbaikan_bangunan');
 		redirect('perbaikan_bangunan/index');
	}

	function fungsi_tolak($id_perbaikan_bangunan)
	{
		$data = array(
			'status' => 'Ditolak'
	 	);
	 	$where = array(
	 		'id_perbaikan_bangunan' => $id_perbaikan_bangunan
	 	);
	 	$this->repair->update_data($where,$data,'tb_perbaikan_bangunan');
 		redirect('perbaikan_bangunan/index');
	}

	function fungsi_setuju($id_perbaikan_bangunan)
	{
		$data = array(
			'status' => 'Disetujui'
	 	);
	 	$where = array(
	 		'id_perbaikan_bangunan' => $id_perbaikan_bangunan
	 	);
	 	$this->repair->update_data($where,$data,'tb_perbaikan_bangunan');
 		redirect('perbaikan_bangunan/index');
	}

}

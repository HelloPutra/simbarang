<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asset extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Asset','asset');
		$this->load->model('M_Kategori','kategori');			
	}

	function index()
	{
		$data['asset'] = $this->asset->GetDataAsset()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_asset/index',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah()
	{
		$data['nip'] = $this->asset->GetNip()->result();
		$data['kat'] = $this->kategori->GetKategori()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_asset/add',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function tambah_aksi()
	{
		$nip = $this->input->post('nip');
		$nama_asset = $this->input->post('nama_asset');
		$satuan = $this->input->post('satuan');
		$jumlah = $this->input->post('jumlah');
		$harga_asset = $this->input->post('harga_asset');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'nip' => $nip,
			'nama_asset' => $nama_asset,
			'satuan' => $satuan,
			'jumlah' => $jumlah,
			'harga_asset' => $harga_asset,
			'tgl_masuk' => $tgl_masuk,
			'id_kategori' => $kategori,
			'keterangan' => $keterangan
			);
		$this->asset->input_data($data,'tb_asset');
		redirect('asset/index');
	}

	function edit($id_asset)
	{
		$where = array('id_asset' => $id_asset);
		$data['tb_asset'] = $this->asset->edit_data($where,'tb_asset')->result();
		$data['kat'] = $this->kategori->GetKategori()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/card_header');
		$this->load->view('v_asset/edit',$data);
		$this->load->view('templates/card_footer');
		$this->load->view('templates/footer');
	}

	function update()
	{
		$id_asset = $this->input->post('id_asset');
		$nip = $this->input->post('nip');
		$nama_asset = $this->input->post('nama_asset');
		$satuan = $this->input->post('satuan');
		$jumlah = $this->input->post('jumlah');
		$harga_asset = $this->input->post('harga_asset');
		$tgl_masuk = $this->input->post('tgl_masuk');
		$kategori = $this->input->post('kategori');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'nip' => $nip,
			'nama_asset' => $nama_asset,
			'satuan' => $satuan,
			'jumlah' => $jumlah,
			'harga_asset' => $harga_asset,
			'tgl_masuk' => $tgl_masuk,
			'id_kategori' => $kategori,
			'keterangan' => $keterangan
		);
		$where = array(
			'id_asset' => $id_asset
		);
		$this->asset->update_data($where,$data,'tb_asset');
		redirect('asset/index');
	}

	function hapus($id_asset)
	{
		$where = array('id_asset' => $id_asset);
		$this->asset->hapus_data($where,'tb_asset');
		redirect('asset/index');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mesin extends CI_Model {
	
	function GetDataAssetMesin()
	{
		$this->db->select('
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nama_asset
			');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		$this->db->where('kat.nama_kategori','Mesin');
		return $this->db->get();
		
	}

	function GetDataAsset()
	{
		$this->db->select('
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nip, 
			ast.nama_asset,
			ast.satuan,
			ast.jumlah,
			ast.harga_asset,
			ast.tgl_masuk,
			ast.keterangan');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		return $this->db->get();
		
	}

	function getMesin()
	{		
		$this->db->select('
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		$this->db->where('kat.nama_kategori', 'Mesin');
		return $this->db->get();
	}

	function GetDataBgmesin()
	{		
		$this->db->select('
			bgn.id_bg_mesin,
			bgn.nama_bagian,
			bgn.status,
			bgn.keterangan,
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		$this->db->join('tb_bg_mesin as bgn', 'bgn.id_asset = ast.id_asset');
		$this->db->where('kat.nama_kategori', 'Mesin');
		return $this->db->get();
	}

	function GetDetail($id)
	{
		$this->db->select('
			bgn.id_bg_mesin,
			bgn.nama_bagian,
			bgn.status,
			bgn.keterangan,
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_bg_mesin as bgn', 'bgn.id_asset = ast.id_asset');
		$this->db->where('ast.id_asset',$id);
		return $this->db->get();
	}

	function getnama($id)
	{
		$this->db->select('id_asset, nama_asset');
		$this->db->from('tb_asset');
		$this->db->where('id_asset',$id);
		return $this->db->get();
	}

	function GetSelected($id)
	{
		$this->db->select('
			bgn.id_bg_mesin,
			bgn.nama_bagian,
			bgn.status,
			bgn.keterangan,
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		$this->db->join('tb_bg_mesin as bgn', 'bgn.id_asset = ast.id_asset');
		$this->db->where('bgn.id_bg_mesin', $id);
		return $this->db->get();
	}

	function edit_data_bgmesin($where,$table){		
	 	return $this->db->get_where($table,$where);
	}

	function update_data_bgmesin($where,$data,$table){
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
	}

}
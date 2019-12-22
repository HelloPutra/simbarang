<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengeluaran extends CI_Model {
	
	function GetDataPengeluaran()
	{
		$this->db->select('
			kel.id_keluar,
			kel.id_asset,
			kel.tgl_keluar,
			kel.jumlah_keluar,
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_keluar as kel', 'kel.id_asset = ast.id_asset');
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

	function GetJumlah($id)
	{
		$this->db->select('jumlah');
		$this->db->from('tb_asset');
		$this->db->where('id_asset',$id);
		return $this->db->get();
	}

	function GetSelected($id)
	{
		$this->db->select('
			kel.id_keluar,
			kel.id_asset,
			kel.tgl_keluar,
			kel.jumlah_keluar,
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_keluar as kel', 'kel.id_asset = ast.id_asset');
		$this->db->where('kel.id_keluar',$id);
		return $this->db->get();
	}

	function edit_data_asset($where,$table){		
		return $this->db->get_where($table,$where);
	}
		
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){		
	 	return $this->db->get_where($table,$where);
	}

	function update_data_asset($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function update_data($where,$data,$table){
	 	$this->db->where($where);
	 	$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
	 	$this->db->where($where);
	 	$this->db->delete($table);
	}
	
}

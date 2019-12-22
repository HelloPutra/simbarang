<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengadaan extends CI_Model {
	
	function GetDataPengadaan()
	{
		$this->db->select('
			png.id_pengadaan,
			png.id_asset,
			png.tgl_pengadaan,
			png.jumlah_kebutuhan,
			png.total_harga,
			png.status,
			png.status,
			png.keterangan,
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_pengadaan as png', 'png.id_asset = ast.id_asset');
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

	function GetHarga($id){
		$this->db->select('harga_asset');
		$this->db->from('tb_asset');
		$this->db->where('id_asset',$id);
		return $this->db->get();
	}

	function GetSelected($id)
	{
		$this->db->select('
			png.id_pengadaan,
			png.id_asset,
			png.tgl_pengadaan,
			png.jumlah_kebutuhan,
			png.total_harga,
			png.status,
			png.status,
			png.keterangan,
			ast.id_asset, 
			ast.nama_asset');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_pengadaan as png', 'png.id_asset = ast.id_asset');
		$this->db->where('png.id_pengadaan',$id);
		return $this->db->get();
	}
	
	function input_data($data,$table){
	 		$this->db->insert($table,$data);
	 	}

	 function edit_data($where,$table){		
	 	return $this->db->get_where($table,$where);
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

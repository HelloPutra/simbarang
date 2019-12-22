<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_Asset extends CI_Model {

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

	function GetNip(){
		$this->db->select('nip,nama');
		$this->db->from('tb_user');
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

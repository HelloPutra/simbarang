<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bgmesin extends CI_Model {
	
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

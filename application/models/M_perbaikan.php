<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Perbaikan extends CI_Model {
	
	function GetDataPerbaikan()
	{
		$this->db->select('
			ast.nama_asset,
			ast.id_asset,
			bgn.id_bg_mesin,
			bgn.id_asset,
			bgn.nama_bagian,
			prb.id_perbaikan,
			prb.id_asset,
			prb.tgl_perbaikan,
			prb.tgl_selesai,
			prb.jumlah_perbaikan,
			prb.biaya_perbaikan,
			prb.status	
			');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_perbaikan as prb', 'ast.id_asset = prb.id_asset');
		$this->db->join('tb_bg_mesin as bgn', 'ast.id_asset = bgn.id_asset');
		return $this->db->get();
	
	}

	function GetMesin(){
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

	function getBagMesin()
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
	
	function GetSelected($id)
	{
		$this->db->select('
			bgn.id_bg_mesin,
			bgn.nama_bagian,
			bgn.status,
			bgn.keterangan,
			kat.nama_kategori, 
			ast.id_asset, 
			ast.nama_asset,
			pb.id_perbaikan,
			pb.id_asset,
			pb.id_bg_mesin');
		$this->db->from('tb_asset as ast');
		$this->db->join('tb_kategori as kat', 'kat.id_kategori = ast.id_kategori');
		$this->db->join('tb_bg_mesin as bgn', 'bgn.id_asset = ast.id_asset');
		$this->db->join('tb_perbaikan as pb', 'bgn.id_bg_mesin = pb.id_bg_mesin');
		$this->db->where('pb.id_perbaikan', $id);
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

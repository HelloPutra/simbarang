<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_bangunan extends CI_Model {
	
	function get()
	{		
		$this->db->select('A.id_bg_bangunan, A.id_bangunan, A.nama_bagian, B.nama_bangunan, C.id_perbaikan_bangunan, C.tgl_perbaikan, C.tgl_selesai, C.biaya, C.status');
		$this->db->from('tb_bg_bangunan AS A');
		$this->db->join('tb_bangunan AS B', 'A.id_bangunan = B.id_bangunan');
		$this->db->join('tb_perbaikan_bangunan AS C', 'A.id_bg_bangunan = C.id_bg_bangunan');
		return $this->db->get();
	}

	function getrusak()
	{		
		$rusak = array('status' => 'rusak' );
		$this->db->select('*');
		$this->db->from('tb_bg_bangunan AS A');
		$this->db->join('tb_bangunan AS B', 'A.id_bangunan = B.id_bangunan');
		$this->db->where($rusak);
		return $this->db->get();
	}

	function input_data($data,$table){
	 		$this->db->insert($table,$data);
	 	}

	 function edit_data($where){		
	 	$this->db->select('A.id_bg_bangunan, A.id_bangunan, A.nama_bagian, B.nama_bangunan, C.id_perbaikan_bangunan, C.tgl_perbaikan, C.tgl_selesai, C.biaya, C.status');
		$this->db->from('tb_bg_bangunan AS A');
		$this->db->join('tb_bangunan AS B', 'A.id_bangunan = B.id_bangunan');
		$this->db->join('tb_perbaikan_bangunan AS C', 'A.id_bg_bangunan = C.id_bg_bangunan');
		$this->db->where($where);
		return $this->db->get();
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

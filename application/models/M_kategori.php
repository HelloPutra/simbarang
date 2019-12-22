<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {
	
	function GetDataKategori()
	{
		return $this->db->get('tb_kategori');
	}
	
	function GetKategori(){
	 $this->db->select('id_kategori,nama_kategori');
	 $this->db->from('tb_kategori');
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

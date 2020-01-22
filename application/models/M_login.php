<?php 
 
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
	function getjabatan($table,$where){		
		return $this->db->get_where($table,$where)->row_array();
	}
	function getpengadaan(){		
		$this->db->select('*');
		$this->db->from('tb_pengadaan_setting');
		return $this->db->get();
	}
	function update_data($data,$table){
	 	$this->db->update($table,$data);
	}
}
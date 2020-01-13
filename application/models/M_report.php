<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_report extends CI_Model {
	
	function show_pengadaan($one,$two){
		$this->db->select('*');
		$this->db->from('tb_pengadaan as a');
		$this->db->join('tb_asset as b', 'a.id_asset = b.id_asset');
		$this->db->where("tgl_pengadaan BETWEEN '$one' AND '$two'");
		return $this->db->get();
	}

	function show_perbaikan($one,$two){
		$this->db->select('*');
		$this->db->from('tb_perbaikan as a');
		$this->db->join('tb_asset as b', 'a.id_asset = b.id_asset');
		$this->db->join('tb_bg_mesin as c', 'a.id_asset = c.id_asset');
		$this->db->where("tgl_perbaikan BETWEEN '$one' AND '$two'");
		return $this->db->get();
	}

}

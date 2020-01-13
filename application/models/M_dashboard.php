<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {
	
	function countAsset(){ 
		return $this->db->query('SELECT COUNT(id_asset) AS data FROM tb_asset');
	}

	function countPengajuan(){
		return $this->db->query('SELECT COUNT(id_pengadaan) AS data FROM tb_pengadaan');
	}

	function countKeluar(){
		return $this->db->query('SELECT COUNT(id_keluar) AS data FROM tb_keluar');
	}

	function countPerbaikan(){
		return $this->db->query('SELECT COUNT(id_perbaikan) AS data FROM tb_perbaikan');
	}

}

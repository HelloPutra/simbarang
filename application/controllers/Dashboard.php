<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_dashboard', 'dashboard');			
	}
	public function index()
	{
		$data['countasset'] = $this->dashboard->countAsset()->result();
		$data['countpengajuan'] = $this->dashboard->countPengajuan()->result();
		$data['countkeluar'] = $this->dashboard->countKeluar()->result();
		$data['countperbaikan'] = $this->dashboard->countPerbaikan()->result();
		$this->load->view('templates/header');
		$this->load->view('v_dashboard/index', $data);
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perbaikan_report extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_report', 'report');			
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_report/perbaikan');
		$this->load->view('templates/footer');
	}

	public function show()
	{
		$one = $this->input->post('one');
		$two = $this->input->post('two');
		if (is_null($one) || $one == '' || is_null($two) || $two == '') {
			redirect(base_url('perbaikan_report/index'));
		}else{
			$data['tb_perbaikan'] = $this->report->show_perbaikan($one,$two)->result();
			$this->load->view('templates/header');
			$this->load->view('v_report/show_perbaikan',$data);
			$this->load->view('templates/footer');
		}
	}
}

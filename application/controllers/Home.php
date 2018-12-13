<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_testi');
		$this->load->model('K_jamur');
		$this->load->model('M_galery');
	}

	public function index(){
		$where = $this->session->userdata('id_user');
		$data ["forum"] 	= $this->K_jamur->beforeforum()->result();
		$data ["testimoni"] = $this->M_testi->testi()->result();
		$data ["produk"]	= $this->K_jamur->produkall()->result();
		$this->load->view('user/home',$data);
	}

}

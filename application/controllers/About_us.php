<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
	}

	public function index(){
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data["produk"]		= $this->K_jamur->produkall()->result();
		$this->load->view('menu/aboutus', $data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
		$this->load->model('M_galery');

	}
	public function index(){
		$where = $this->session->userdata('id_user');
		$data["forum"] = $this->K_jamur->beforeforum('id_user')->result();
		$data["produk"]		= $this->K_jamur->produkall('id_user')->result();
		$data ['gallery']   = $this->M_galery->gal('id_user')->result();
		
	
	}
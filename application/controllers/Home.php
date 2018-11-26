<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_testi');
		$this->load->model('K_jamur');
	}

	public function index(){
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data ["testimoni"] = $this->M_testi->testi()->result();
		$this->load->view('user/home',$data);
	}

}

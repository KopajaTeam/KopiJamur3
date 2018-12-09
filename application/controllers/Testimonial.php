<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
		$this->load->model('M_galery');
	}

	public function index(){	
	
		
		$data ["testimoni"] = $this->M_testi->testi()->result();
	
		$this->load->view('menu/testimonial',$data);
	
	}
}

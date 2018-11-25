<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_testi');
	}

	public function index(){	

		$data ["testimoni"] = $this->M_testi->testi()->result();
	
		$this->load->view('menu/testimonial',$data);
		$this->load->view('')
	}

}

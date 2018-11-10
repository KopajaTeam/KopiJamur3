<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {


	public function index(){
		$this->load->model('M_testi');

		$this->load->view('menu/testimonial');
	}

}

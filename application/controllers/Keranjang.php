<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {


	public function index(){
		$this->load->view('menu/bayar');
	}

	public function invoice(){
		$this->load->view('menu/invoice');
	}

}

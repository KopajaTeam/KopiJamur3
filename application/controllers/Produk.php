<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {


	public function index(){
		$this->load->view('menu/product');
	}

	function detail_produk(){
		$this->load->view('menu/detailproduk');
	}

}

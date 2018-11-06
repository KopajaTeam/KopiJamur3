<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
    }

	public function index(){
		$data ['produk']=$this->K_jamur->produkall()->result();
		$this->load->view('menu/product', $data);
	}

	function detail_produk($id_produk){
		//konten forum
		$data ['produk'] =$this->K_jamur->detailproduk($id_produk)->row();

		$this->load->view('menu/detailproduk', $data);
    }
}
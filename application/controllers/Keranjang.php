<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
    }


	public function index(){
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data["produk"]		= $this->K_jamur->produkall()->result();
		$this->load->view('menu/bayar', $data);
	}

	public function invoice(){
		$this->load->view('menu/invoice');
	}

}

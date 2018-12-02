<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
    }


	public function index(){
		$user=$this->session->userdata('id_user');
		$data['keranjang'] = $this->K_jamur->keranjang($user);
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data["produk"]		= $this->K_jamur->produkall()->result();
		$this->load->view('menu/bayar', $data);
	}

	public function invoice(){
		$this->load->view('menu/invoice');
	}

	function insert_transaksi(){
    	$id_transaksi = $this->input->post('idProduk');
    	$tgl = date("dd/mm/yyyy");
    	$id_user = $this->session->userdata('id_user');
    	$data = array('id_produk' =>$id_produk,
    	'tgl_transaksi'=> $tgl,
    	'id_user'=>$id_user,
    	'status'=>1 );
    	$insert = $this->db->insert('transaksi',$data);
    	if ($insert >= 0) {
    		// flash_data('Berhasil Di tambahkan ke kranjang');
    		redirect(base_url('Produk?'));

    	}else{
    		// flash_data('Gagal Di tambahkan');
    		redirect(base_url('Produk'));

    	}
    }

}

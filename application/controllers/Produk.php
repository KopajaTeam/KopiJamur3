<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
    }

	public function index(){
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data ['produk']=$this->K_jamur->produkall()->result();
		$this->load->view('menu/product', $data);
	}

	function detail_produk($id_produk){
		//konten forum
		$data ['produk'] =$this->K_jamur->detailproduk($id_produk)->row();

		$this->load->view('menu/detailproduk', $data);
    }
    function insertKranjang(){
    	$id_produk = $this->input->post('idProduk');
    	$harga =$this->input->post('hrgProduk');
    	$id_user = $this->session->userdata('id_user');
    	$date= date("dd/mm/yyy");
    	$data = array('id_user' =>$id_user ,
    		'status' =>1 ,
    	 );
    	$insert = $this->K_jamur->insert2('transaksi', $data);
    	if ($insert >= 0) {
    		$data = array('id_produk' =>$id_produk,
    	'harga'=> $harga,
    	'status'=>1,
    	'id_transaksi'=>$insert );
    	$insert3 = $this->db->insert('keranjang',$data);;
    	redirect(base_url('Produk?'));

    	}else{
    		// flash_data('Gagal Di tambahkan');
    		redirect(base_url('Produk'));

    	}
    }
    
}
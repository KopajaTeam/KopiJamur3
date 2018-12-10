<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
        $this->load->model('M_galery');
    }

	public function index(){
		
		$data1 ['produk']=$this->K_jamur->produkall()->result();
       
		$this->load->view('menu/product', $data1);
	}

	function detail_produk($id_produk){
		//konten forum
		$data ['produk'] =$this->K_jamur->detailproduk($id_produk)->row();

		$this->load->view('menu/detailproduk', $data);
    }
    function insertKranjang(){
    	$id_produk = $this->input->post('idProduk');
    	$id_user = $this->session->userdata('id_user');
        $keranjang=$this->K_jamur->selectwhere('keranjang',array('id_user' => $id_user, 'id_produk'=>$id_produk ));
    	$date= date("dd/mm/yyy");
        if ($keranjang->num_rows()==1) {
            $data = array(
                'qty'   => $keranjang->row()->qty+1,
            );
            $insert = $this->db->update('keranjang',$data,array('id_user' => $id_user, 'id_produk'=>$id_produk ));
            if ($insert >= 0) {
                
               redirect(base_url('Produk?'));

            }else{
                // flash_data('Gagal Di tambahkan');
                redirect(base_url('Produk'));

            }
        }else{
            $data = array(
                'id_produk' =>$id_produk,
                'id_user'=>$id_user,
                'qty'   => 1,
            );
            $insert = $this->db->insert('keranjang',$data);
            if ($insert >= 0) {
                
               redirect(base_url('Produk?'));

            }else{
                // flash_data('Gagal Di tambahkan');
                redirect(base_url('Produk'));

            }
        }
    }
    
}
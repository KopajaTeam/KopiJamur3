<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
	}
	public function index(){
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data["produk"]		= $this->K_jamur->produkall()->result();
		$data["user"] = $this->session->userdata('nama_user');
		$this->load->view('dsuser/checkout', $data);
	}

function ckOut(){
$simpan_checkout = array(
			'nama' => $this->input->post('nama') ,
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'nama_produk' => $this->input->post('nama_produk'),
			'total_pesanan' => $this->input->post('total_pesanan'),
			'total_pembayaran' =>$this->input->post('total_pembayaran'),
			'id_Produk' => $this->input->post('id_produk'),

		 );
		$this->db->insert('checkout',$simpan_checkout);
				redirect('Dashboard_user');

}
}

 ?>
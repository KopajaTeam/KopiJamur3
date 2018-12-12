<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
		$this->load->model('M_galery');
	}
	public function index(){
		$where = $this->session->userdata('id_user');
		$data["forum"] = $this->K_jamur->beforeforum()->result();
		$data["produk"]	= $this->K_jamur->produkall()->result();
		$data["keranjang"] = $this->K_jamur->keranjang($where)->result();
		$data["kecamatan"]=$this->db->get('kecamatan');
		$data["user"] = $this->session->userdata('nama_user');
		$this->load->view('dsuser/checkout', $data);
	}

	function ckOut(){
		$simpan_checkout = array(
			'id_transaksi' => '' ,
			'id_user' => $this->session->userdata('id_user'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_transaksi' => $this->input->post('total_transaksi'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' =>$this->input->post('no_telp'),
			'status' => 0,

		);
		$simpan_checkout_db=$this->db->insert('transaksi',$simpan_checkout);
		if ($simpan_checkout_db>=0) {
			$data_terakhir=$this->K_jamur->get_last();
			$keranjang = $this->K_jamur->keranjang($this->session->userdata('id_user'))->result();
			foreach ($keranjang  as $data_keranjang) {
				$data = array(
                    'id_transaksi'          => $data_terakhir->id_transaksi,
                    'id_produk'             => $data_keranjang->id_produk, 
                    'harga'		     		=> $data_keranjang->harga_produk,
                    'total_harga'     		=> $data_keranjang->harga_produk*$data_keranjang->qty,
                    'qty'                   => $data_keranjang->qty
				);
				$this->db->insert('detail_transaksi',$data);
			}
			$this->Admin_Dashboard->delete(array('id_user' => $this->session->userdata('id_user')),'keranjang');
			redirect('Dashboard_user');
		}

	}

}

?>
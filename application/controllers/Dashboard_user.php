<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
	}
	public function index(){
		$this->load->view('dsuser/dashuser');
	}
	public function sidenav(){
		$this->load->view('dsuser/sidenav_dashuser');
	}
<<<<<<< HEAD
// 	public function tambah_forum(){
// 		$this->load->view('dsuser/tambah_forum');
// }
public function konfirmasi_pembayaran(){
=======
	public function tambah_forum(){
		$this->load->view('dsuser/tambah_forum');
	}
	public function konfirmasi_pembayaran(){
>>>>>>> 7e68022a064662a35f039f766bc2e089da2cb334
		$this->load->view('dsuser/konfirmasi_pembayaran');
	}
	public function tentang_saya(){
		$this->load->view('dsuser/tentang_saya');
	}
	public function forum_view(){
		$this->load->view('dsuser/forum_view');
	}
	public function testimonial_view(){
		$this->load->view('dsuser/testimonial_view');
	}
	public function tambah_testimonial(){
		$this->load->view('dsuser/tambah_testimonial');
	}
	public function invoice(){
		$this->load->view('dsuser/invoice');
	}
	public function checkout(){
		$this->load->view('dsuser/checkout');
	}
	public function pesanan_saya(){
		$this->load->view('dsuser/pesanan_saya');
	}
}

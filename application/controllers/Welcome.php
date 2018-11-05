<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index(){
		$this->load->view('user/home');
	}
		function about(){
			$this->load->view('menu/aboutus');
		}
		function bayar(){
			$this->load->view('menu/bayar');
		}
		function detailf(){
			$this->load->view('menu/detailforum');
		}
		function gambar(){
			$this->load->view('menu/galery');
		}
		function testi(){
			$this->load->view('menu/testimonial');
		}
		//function forum(){
		//	$this->load->view('menu/forum');
		//}
//		function detform(){
		//	$this->load->view('menu/detailforum');
//		}
		function produk(){
			$this->load->view('menu/product');
		}
		function logo(){
			$this->load->view('user/home');
		}
		function kontak(){
			$this->load->view('user/sosmed');
		}
		function login(){
			$this->load->view('user/login/login');
		}
		function contact(){
			$this->load->view('menu/contact');

		}
		function histori(){
			$this->load->view('user/keyfet/histori');
		}
		function unggulan(){
			$this->load->view('user/keyfet/unggulan');
		}
		function prestasi(){
			$this->load->view('user/keyfet/prestasi');
		}
		function detprofad(){
			$this->load->view('menu/detailprofilow');
		}
}

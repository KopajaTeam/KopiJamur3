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
	public function tambah_forum(){
		$this->load->view('dsuser/tambah_forum');
}
public function konfirmasi_pembayaran(){
		$this->load->view('dsuser/konfirmasi_pembayaran');
}
public function tentang_saya(){
		$this->load->view('dsuser/tentang_saya');
}
public function forum_view(){
		$this->load->view('dsuser/forum_view');
}
}

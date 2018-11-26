<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prestasi extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_prestasi');
    }

	public function index(){
		$data = array('prestasi' => $this->M_prestasi->feat()->result(), );

		$this->load->view('user/keyfet/prestasi', $data);
	}

}

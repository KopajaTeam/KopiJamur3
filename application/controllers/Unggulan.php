<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Unggulan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_key');
        $this->load->model('M_galery');
    }

	public function index(){

		$data = array('unggulan' => $this->M_key->feat()->result(), );

		$this->load->view('user/keyfet/unggulan', $data);
	}

}

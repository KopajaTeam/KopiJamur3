<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Unggulan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_key');
    }

	public function index(){

		$data = array('key_features' => $this->M_key->feat()->result(), );

		$this->load->view('user/keyfet/unggulan', $data);
	}

}

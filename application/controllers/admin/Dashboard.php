<?php

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
        $this->load->model('M_testi');
        $this->load->model('K_jamur');
  		if (!$this->session->userdata('status')=="login") {       	
  			redirect('Admin/Login_adm');
        }
    }
	
	public function index(){
		$this->load->view('admin/v_home');
	}

}
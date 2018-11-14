<?php

class Dashboard extends CI_Controller {

	public function __construct() {
          parent::__construct();
          $this->load->model('Admin_Dashboard');
     }
	
	public function index(){
		$this->load->view('admin/v_home');
	}

}
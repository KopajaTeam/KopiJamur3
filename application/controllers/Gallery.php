<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galery');
    }

	public function index(){
		
		$data = array('gallery' => $this->M_galery->gal()->result(), );
	
		$this->load->view('menu/galery',$data);
	}
	

}

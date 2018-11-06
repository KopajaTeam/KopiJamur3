<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {


	public function index(){
		$this->load->view('menu/forum');
	}
	function Detail_forum($id_forum){
		//konten forum
		$this->load->model('K_jamur');

		$data = array(
			"forum" => $this->K_jamur->detailforum($id_forum)->row(),
			"reply" => $this->K_jamur->reply($id_forum)->result(),
			
		);

		$this->load->view('menu/detailforum',$data);
	}

}

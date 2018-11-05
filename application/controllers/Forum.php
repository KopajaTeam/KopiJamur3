<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {


	public function index(){
		$this->load->view('menu/forum');
	}
	function Detail_forum($id_forum){
		//konten forum
		$this->load->model('K_jamur');

		$data ['forum'] =$this->K_jamur->detailforum($id_forum)->row();

		$this->load->view('menu/detailforum',$data);
	}
	function reply($id_reply){
		$this->load->model('K_jamur');

		$data ['reply_forum'] =$this->K_jamur->reply($id_reply)->row();		

		$this->load->view('menu/detailforum',$data);
	}

}

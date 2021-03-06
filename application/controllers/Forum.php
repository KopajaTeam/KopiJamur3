<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {
		public function __construct()
    {
        parent::__construct();
        $this->load->model('M_galery');
        $this->load->model('K_jamur');
    }


	public function index(){

		$data["forum"] = $this->K_jamur->beforeforum()->result();
	
		$this->load->view('menu/forum', $data);
		
	

	}

	function Detail_forum($id_forum){
		//konten forum	
		$data = array(
			"jml_forum" => $this->K_jamur->detailforum($id_forum)->num_rows(),
			"forum" => $this->K_jamur->detailforum($id_forum)->row(),
			"reply" => $this->K_jamur->reply($id_forum)->result(),
			'tanggal'			=> date("Y-m-d"),

		);

		$this->load->view('menu/detailforum',$data);

	}

	function komentar($forumkom){
		$komen = array(
			'id_reply'			=> "",
			'id_user'			=> $this->session->userdata("id_user"),	
			'id_forum'			=> $forumkom,
			'isi_reply'			=> $this->input->post('koment'),
			'tanggal_reply'			=> date("Y-m-d"),

		);
		$this->K_jamur->insert('reply_forum',$komen);
		redirect('Forum/detail_forum/'.$forumkom);
	}
}

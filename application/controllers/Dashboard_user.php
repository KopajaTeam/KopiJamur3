<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
	}
	public function index(){
		$this->load->view('dsuser/dashuser');
	}
	public function sidenav(){
		$this->load->view('dsuser/sidenav_dashuser');
	}
	public function tambah_forum(){
		$data = array(
			'kategori_forum'  => $this->Admin_Dashboard->select('kategori_forum')->result(),
		);
		$this->load->view('dsuser/tambah_forum',$data);
	}
	function simpan_forum(){
		$dir = 'assets/images_upload/foto_forum/';
		$config['upload_path']      = 'assets/images_upload/foto_forum/';
		$config['allowed_types']    = 'jpg|png|jpeg';
		$config['max_size']         = '2048';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if (!$this->upload->do_upload('gambar_headline')) {
			echo $this->upload->display_errors();
		}else{
			$simpanforum = array(
				'judul' 			=> $this->input->post('judul_forum'),
				'id_user'			=> $this->session->userdata("id_user"),	
				'id_kategori_forum' => $this->input->post('kategori_forum'),
				// 'desc_forum' 		=> $this->input->post('desc_forum'),
				'isi_forum' 		=> $this->input->post('isi_forum'),
				'tanggal'			=> $this->input->post('tanggal'),
				'gambar_headline'	=> $dir.$this->upload->data('file_name'),
			);

			$this->db->insert('forum',$simpanforum);
		}
		redirect('Dashboard_user/forum_view');
	}
	public function konfirmasi_pembayaran(){
		$this->load->view('dsuser/konfirmasi_pembayaran');
	}
	public function tentang_saya(){
		$this->load->view('dsuser/tentang_saya');
	}
	public function forum_view(){
		$data ["forum"] = $this->K_jamur->beforeforum()->result();
		$this->load->view('dsuser/forum_view', $data);
	}
	public function testimonial_view(){
		
		$data ["testimoni"] = $this->M_testi->testi()->result();

		$this->load->view('dsuser/testimonial_view',$data);
	}
	public function tambah_testimonial(){
		if ($this->input->post('komentar_produk')!="") {
			$gam = 'assets/images/portfolio/';
			$config['upload_path']      = 'assets/images/portfolio/';
			$config['allowed_types']    = 'jpg|png|jpeg';
			$config['max_size']         = '2048';
			$this->load->library('upload', $config);
			$this->upload->initialize($config); 
			if (!$this->upload->do_upload('gambar_testi')) {
				echo $this->upload->display_errors();

			}else{
				$simpantesti = array(
					'komentar'		=> $this->input->post('komentar_produk'),
					'id_user'		=> $this->session->userdata("id_user"),
					'id_testimoni'	=> "",
					'id_produk'		=> $this->input->post("id_produk"),
					'rate'			=> "",
					'gambar_testi'	=>	$gam.$this->upload->data('file_name'),
				);
				$this->db->insert('testimoni',$simpantesti);
				redirect('dashboard_user/testimonial_view');
			}
		}else{
			$data = array(
				'kproduk'  => $this->Admin_Dashboard->select('produk')->result()
			);
			$this->load->view('dsuser/tambah_testimonial',$data);
		}
	}
	public function invoice(){
		$this->load->view('dsuser/invoice');
	}
	public function checkout(){
		$this->load->view('dsuser/checkout');
	}
	public function pesanan_saya(){
		$this->load->view('dsuser/pesanan_saya');
	}
	public function detail_pesanan(){
		$this->load->view('dsuser/detail_pesanan');
	}


//Function Baru hati - hati ini penting
	public function testiact(){
		$this->load->view('dsuser/tambah_testimonial');
	}
	public function edit_forum(){
		$id_forum = $this->uri->segment(3);
		$data ['forum'] = $this->Admin_Dashboard->forumedit($id_forum)->row_array();
		$this->load->view('dsuser/edit_forum',$data);	
	}
	public function edit_forum_simpan(){

	}

    function del_for($id_forum){
        $where = array('id_forum' => $id_forum);
        $this->Admin_Dashboard->delete($where,'forum');
        redirect('Dashboard_user/forum_view');
    }


}
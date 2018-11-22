<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
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
				'desc_forum' 		=> $this->input->post('desc_forum'),
				'isi_forum' 		=> $this->input->post('isi_forum'),
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
		$this->load->view('dsuser/forum_view');
	}
	public function testimonial_view(){
		$this->load->view('dsuser/testimonial_view');
	}
	public function tambah_testimonial(){
		if ($this->input->post('komentar_produk')!="") {
			$gam = 'assets/images_upload/fototesti/';
			$config['upload_path']      = 'assets/images_upload/fototesti/';
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
}

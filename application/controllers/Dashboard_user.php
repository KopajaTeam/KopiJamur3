<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('K_jamur');
		$this->load->model('M_testi');
		$this->load->model('M_galery');

	}
	public function index(){
		$where = $this->session->userdata('id_user');
		$data["transaksi"]	= $this->K_jamur->transaksi($this->session->userdata('id_user'))->result();
		$this->load->view('dsuser/dashuser',$data);
	}
	public function sidenav(){
		$this->load->view('dsuser/sidenav_dashuser');
	}
	public function tambah_forum(){
	
		$data ['kategori_forum'] =$this->Admin_Dashboard->select('kategori_forum')->result();
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
				'tanggal'			=> date("Y-m-d"),
				'gambar_headline'	=> $dir.$this->upload->data('file_name'),
			);

			$this->db->insert('forum',$simpanforum);
		}
		redirect('Dashboard_user/forum_view');
	}
	public function konfirmasi_pembayaran(){
		
		$this->load->view('dsuser/konfirmasi_pembayaran');
	}
	function insert_konfirmasi(){
    $dir = 'assets/images_upload/upload_bukti/';
        $config['upload_path']      = 'assets/images_upload/upload_bukti/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('bukti')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_transaksi' => $this->input->post('id_transaksi'),
            'bank' => $this->input->post('bank'),
            'atas_nama' => $this->input->post('atas_nama'),
            'jumlah_transfer' => $this->input->post('jumlah_transfer'),
            'tgl_transfer' => $this->input->post('tgl_transfer'),
            'bukti' => $dir.$this->upload->data('file_name'),
        );
        $konfirmasi = $this->db->insert('konfirmasi_pembayaran',$data);
        if ($konfirmasi >=0) {
        	$where['id_transaksi']=$this->input->post('id_transaksi');
        	$data = array('status' => 1, );
        	$this->db->update('transaksi',$data,$where);
        }
        // $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Data Berhasil Ditambahkan</div>");
        redirect('Dashboard_user');
        }
    }
	public function tentang_saya(){
		$where = $this->session->userdata('id_user');
		
		$data['user'] = $this->K_jamur->select2($where)->row();

		$this->load->view('dsuser/tentang_saya', $data);
	}
	public function edit_user(){
		$this->load->view('dsuser/edit_user');
	}
	    function edit_users($id_user){
        $where = array('id_user' => $id_user);
        $user = $this->K_jamur->selectwhere('user',$where)->row();
        $data = array(
            'nama'				=> $user->nama, 
            'alamat'         	=> $user->alamat,
            'email'         	=> $user->email,
            'password'     		=> $user->password,
            'tgl_lahir'      	=> $user->tgl_lahir,
            'jenis_kelamin'     => $user->jenis_kelamin,
            'telp'      		=> $user->telp,
            'foto'     			=> $user->foto,
        );
        $this->load->view('dsuser/edit_user', $data);
    }

    function update_users(){        
        $where = array('id_user' => $this->input->post('id'));
        $dir = 'assets/images_upload/foto_user/';
        $config['upload_path']      = 'assets/images_upload/foto_user/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('foto')) {
            $data = array(
                'nama' 				=> $this->input->post('nama'), 
                'alamat'       		=> $this->input->post('alamat'),
                'email'     		=> $this->input->post('email'),
                'password'      	=> $this->input->post('password'),
                'tgl_lahir'      	=> $this->input->post('tgl_lahir'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'telp'     			=> $this->input->post('telp'),
            );
        }else{
            $data = array(
                'nama' 				=> $this->input->post('nama'), 
                'alamat'       		=> $this->input->post('alamat'),
                'email'     		=> $this->input->post('email'),
                'password'      	=> $this->input->post('password'),
                'tgl_lahir'      	=> $this->input->post('tgl_lahir'),
                'jenis_kelamin'     => $this->input->post('jenis_kelamin'),
                'telp'     			=> $this->input->post('telp'),
                'foto'     			=> $dir.$this->upload->data('file_name'),
            );
        }
        $produk = $this->K_jamur->update('user',$data,$where);
        redirect('Dashboard_user');
    }
	public function forum_view(){
		$where = $this->session->userdata('id_user');
		// die($where);
		$data["forum1"]=$this->K_jamur->beforeforum1($where)->result();
	
		$this->load->view('dsuser/forum_view', $data);
	}
	public function testimonial_view(){
		$where = $this->session->userdata('id_user');
		$data ["testimoni"] = $this->M_testi->testmon($where)->result();

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
		$id = $this->uri->segment(3);
        $data = array(
        	'id_transaksi' =>$this->uri->segment(3),
        	'nama' => 'nama',
        	'alamat' => 'alamat',
        );
        $data['transaksi'] = $this->K_jamur->invoice($data)->row();
        $data['transaksi1'] = $this->K_jamur->invoice2($id)->result();
		$this->load->view('dsuser/invoice',$data);
	}

	public function pesanan_saya(){

		
		$data["transaksi"]	= $this->K_jamur->transaksi($this->session->userdata('id_user'))->result();

		$this->load->view('dsuser/pesanan_saya', $data);
	}
 	
	public function detail_pesanan(){
		$id = $this->uri->segment(3);
		// $fg = array('id_transaksi' =>$id);
		$data['transaksi'] = $this->K_jamur->detail_pemesanan($id)->row();
		$this->load->view('dsuser/detail_pesanan',$data);
	}


//Function Baru hati - hati ini penting
	public function testi_action(){	 
		$id_testimoni = $this->uri->segment(3);
		$data ['testimoni'] 		 =  $this->Admin_Dashboard->testiedit($id_testimoni)->row_array();
		$data ['produk'] =	$this->Admin_Dashboard->select("produk")->result();
		$this->load->view('dsuser/edit_testimoni',$data);
	}
	public function simpan_testi(){
		if ($this->input->post('komentar_produk')!="") {
			$gam = 'assets/images/portfolio/';
			$config['upload_path']      = 'assets/images/portfolio/';
			$config['allowed_types']    = 'jpg|png|jpeg';
			$config['max_size']         = '2048';
			$this->load->library('upload', $config);
			$this->upload->initialize($config); 
			if (!$this->upload->do_upload('gambar_testi')) {
				$id	 = $this->input->post('id_testimoni');
				$simpantesti = array(
					'komentar'		=> $this->input->post('komentar_produk'),
					// 'id_user'		=> $this->session->userdata("id_user"),
					// 'id_testimoni'	=> "",
					'id_produk'		=> $this->input->post("id_produk"),
					'rate'			=> "",);
				$this->db->where('id_testimoni',$id);
				$this->db->update('testimoni',$simpantesti);
				redirect('dashboard_user/testimonial_view');
					
			}else{
				$id	 = $this->input->post('id_testimoni');
				$simpantesti = array(
					'komentar'		=> $this->input->post('komentar_produk'),
					// 'id_user'		=> $this->session->userdata("id_user"),
					// 'id_testimoni'	=> "",
					'id_produk'		=> $this->input->post("id_produk"),
					'rate'			=> "",
					'gambar_testi'	=> $gam.$this->upload->data('file_name'),
				);
				$where['id_testimoni']=$id;
				$this->db->update('testimoni',$simpantesti,$where);
				redirect('dashboard_user/testimonial_view');
			}
		}else{
			$data = array(
				'kproduk'  => $this->Admin_Dashboard->select('produk')->result()
			);
			$this->load->view('dsuser/tambah_testimonial',$data);
		}
	}

	function del_testi($id_testimoni){
		$where = array('id_testimoni' => $id_testimoni);
		$this->Admin_Dashboard->delete($where,'testimoni');
		redirect('Dashboard_user/testimonial_view');
	}


	//show data forum sebelum di edit
	public function edit_forum(){
		$id_forum = $this->uri->segment(3);
		$data 	['forum'] 		 =  $this->Admin_Dashboard->forumedit($id_forum)->row_array();

		$data 	['kategori_forum'] =	$this->Admin_Dashboard->select("kategori_forum")->result();
		$this->load->view('dsuser/edit_forum',$data);	
	}
	//simpan data 
	public function edit_forum_simpan(){
		$dir = 'assets/images_upload/foto_forum/';
		$config['upload_path']      = 'assets/images_upload/foto_forum/';
		$config['allowed_types']    = 'jpg|png|jpeg';
		$config['max_size']         = '2048';
		$this->load->library('upload', $config);
		$this->upload->initialize($config); 
		if (!$this->upload->do_upload('gambar_headline')) {
			$id	 = $this->input->post('id_forum');
			$simpanforum = array(
				'judul' 			=> $this->input->post('judul_forum'),
				'id_user'			=> $this->session->userdata("id_user"),	
				'id_kategori_forum' => $this->input->post('kategori_forum'),
				// 'desc_forum' 		=> $this->input->post('desc_forum'),
				'isi_forum' 		=> $this->input->post('isi_forum'),
				'tanggal'			=> $this->input->post('tanggal'),
			);
			$this->db->where('id_forum',$id);
			$this->db->update('forum',$simpanforum);
			redirect('Dashboard_user/forum_view');
		}else{
			$id	 = $this->input->post('id_forum');
			$simpanforum = array(
				'judul' 			=> $this->input->post('judul_forum'),
				'id_user'			=> $this->session->userdata("id_user"),	
				'id_kategori_forum' => $this->input->post('kategori_forum'),
				// 'desc_forum' 		=> $this->input->post('desc_forum'),
				'isi_forum' 		=> $this->input->post('isi_forum'),
				'tanggal'			=> $this->input->post('tanggal'),
				'gambar_headline'	=> $dir.$this->upload->data('file_name'),
			);
			$this->db->where('id_forum',$id);
			$this->db->update('forum',$simpanforum);
			redirect('Dashboard_user/forum_view');
		}
	}
	//delet data
	function del_for($id_forum){
		$where = array('id_forum' => $id_forum);
		$this->Admin_Dashboard->delete($where,'forum');
		redirect('Dashboard_user/forum_view');
	}

}
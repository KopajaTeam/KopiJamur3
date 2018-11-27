<?php
/**
 *
 */
class Forum extends CI_Controller
{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }
	public function index(){
		$data = array('forum' => $this->Admin_Dashboard->beforeforum()->result(), );
		$this->load->view('admin/Forum/v_forum',$data);
	}

	function tambah_forum(){
		$data = array(
            'kategori_forum'  => $this->Admin_Dashboard->select('kategori_forum')->result(),
        );
		$this->load->view('admin/Forum/v_tambahdata_forum', $data);
	}
	public function simpan(){
		$config = array(
			'upload_path' => 'assets/images_upload/foto_forum',
			'allowed_types' => 'gif|jpg|JPG|png|jpeg',
			'max_size' => '2048',
			'remove_space' => TRUE,
		);
		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_forum')) {
			$upload_data = $this->upload->data();

			$judul_forum= $this->input->post('judul');
			$isi_forum= $this->input->post('isi_forum');
			$kategori_forum= $this->input->post('kategori_forum');
			$foto_forum= $this->input->post('foto_forum');

			$data = array( 
				'judul'      			=> $judul_forum,
				'isi_forum'    			=> $isi_forum, 
				'id_kategori_forum'   	=> $kategori_forum, 
				'gambar_headline'      	=> $foto_forum,
				'id_user' 				=> $this->session->userdata('id_admin')
			);

			$result = $this->Admin_Dashboard->insert("forum",$data);
			if($result>=0){
				redirect('admin/Forum');
			}
		}else{
			redirect('admin/Forum/tambah_forum');
		}
	}
}

?>
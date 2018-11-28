<?php
/**
 *
 */
class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }

    public function index(){
    $data = array('gallery' => $this->Admin_Dashboard->select('gallery')->result(), ); 
    $this->load->view('admin/Gallery/v_gallery',$data);

  }

  function tambah_gallery(){
    $this->load->view('admin/Gallery/v_tambahdata_gallery');
  }

   function insert(){
    $dir = 'assets/images_upload/gambar_gallery/';
        $config['upload_path']      = 'assets/images_upload/gambar_gallery/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_gallery')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_gallery' => "",
            'nama_gallery' => $this->input->post('nama_gallery'),
            'deskripsi_gallery' => $this->input->post('deskripsi_gallery'),
            'gambar_gallery' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('gallery',$data);
        redirect('admin/Gallery');
        }
    }
}
?>

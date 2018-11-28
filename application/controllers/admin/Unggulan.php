<?php
/**
 *
 */
class Unggulan extends CI_Controller
{   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }

    public function index(){
    $data = array('unggulan' => $this->Admin_Dashboard->select('unggulan')->result(), ); 
    $this->load->view('admin/Unggulan/v_unggulan', $data);
  }

  function tambah_unggulan(){
    $this->load->view('admin/Unggulan/v_tambahdata_unggulan');
  }
  function insert(){
    $dir = 'assets/images_upload/gambar_unggulan/';
        $config['upload_path']      = 'assets/images_upload/gambar_unggulan/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_unggulan')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_unggulan' => "",
            'judul_unggulan' => $this->input->post('judul_unggulan'),
            'isi_unggulan' => $this->input->post('isi_unggulan'),
            'gambar_unggulan' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('unggulan',$data);
        redirect('admin/Unggulan');
        }
    }
}

 ?>

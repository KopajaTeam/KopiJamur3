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
    $dir = 'assets/images_upload/gambar_galeri/';
        $config['upload_path']      = 'assets/images_upload/gambar_galeri/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_galeri')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_gallery' => "",
            'nama_gallery' => $this->input->post('nama_gallery'),
            'deskripsi_gallery' => $this->input->post('deskripsi_gallery'),
            'gambar_galeri' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('gallery',$data);
        $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Data Berhasil Ditambahkan</div>");
        redirect('admin/Gallery');
        }
    }
    function hapus($id_gallery){
        $where = array('id_gallery' => $id_gallery);
        $this->Admin_Dashboard->delete($where,'gallery');
        $this->session->set_flashdata('message', "<div class=\"alert alert-danger alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Data Berhasil Dihapus</div>");
        redirect('admin/Gallery');
    }
 
    function edit($id_gallery){
        $where = array('id_gallery' => $id_gallery);
        $gallery = $this->Admin_Dashboard->selectwhere('gallery',$where)->row();
        $data = array(
            'gallery'   => $this->Admin_Dashboard->select('gallery')->result(),
            'id_gallery'        => $gallery->id_gallery,
            'nama_gallery'      => $gallery->nama_gallery,
            'deskripsi_gallery' => $gallery->deskripsi_gallery,
            'gambar_galeri'    => $gallery->gambar_galeri,
        );
        $this->load->view('admin/Gallery/edit_gallery', $data);
    }

    function update(){        
        $where = array('id_gallery' => $this->input->post('id'));
        $dir = 'assets/images_upload/gambar_galeri/';
        $config['upload_path']      = 'assets/images_upload/gambar_galeri/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_galeri')) {
            $data = array(
                'nama_gallery'      => $this->input->post('nama_gallery'),
                'deskripsi_gallery' => $this->input->post('deskripsi_gallery'),
            );
        }else{
            $data = array(
                'nama_gallery'      => $this->input->post('nama_gallery'),
                'deskripsi_gallery' => $this->input->post('deskripsi_gallery'),
                'gambar_galeri'    => $dir.$this->upload->data('file_name'),
            );
        }
        $produk = $this->Admin_Dashboard->update('gallery',$data,$where);
        $this->session->set_flashdata('message', "<div class=\"alert alert-success alert-dismissible\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Succes, Data Berhasil Diperbarui</div>");
        redirect('admin/Gallery');
    }
}
?>

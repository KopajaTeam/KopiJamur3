<?php
/**
 *
 */
class Prestasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }

    public function index(){
    $data = array('prestasi' => $this->Admin_Dashboard->select('prestasi')->result(), ); 
    $this->load->view('admin/Prestasi/v_prestasi', $data);
  }

  function tambah_prestasi(){
    $this->load->view('admin/Prestasi/v_tambahdata_prestasi');
  }

  function insert(){
    $dir = 'assets/images_upload/gambar_prestasi/';
        $config['upload_path']      = 'assets/images_upload/gambar_prestasi/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '10048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_prestasi')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_prestasi' => "",
            'judul_prestasi' => $this->input->post('judul_prestasi'),
            'isi_prestasi' => $this->input->post('isi_prestasi'),
            'gambar_prestasi' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('prestasi',$data);
        redirect('admin/Prestasi');
        }
    }
    function hapus($id_prestasi){
        $where = array('id_prestasi' => $id_prestasi);
        $this->Admin_Dashboard->delete($where,'prestasi');
        redirect('admin/Prestasi');
    }
 
    function edit($id_prestasi){
        $where = array('id_prestasi' => $id_prestasi);
        $prestasi = $this->Admin_Dashboard->selectwhere('prestasi',$where)->row();
        $data = array(
            'prestasi'          => $this->Admin_Dashboard->select('prestasi')->result(),
            'id_prestasi'       => $prestasi->id_prestasi,
            'judul_prestasi'    => $prestasi->judul_prestasi,
            'isi_prestasi'      => $prestasi->isi_prestasi,
            'gambar_prestasi'    => $prestasi->gambar_prestasi,
        );
        $this->load->view('admin/Prestasi/edit_prestasi', $data);
    }

    function update(){        
        $where = array('id_prestasi' => $this->input->post('id'));
        $dir = 'assets/images_upload/gambar_prestasi/';
        $config['upload_path']      = 'assets/images_upload/gambar_prestasi/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_prestasi')) {
            $data = array(
                'id_prestasi'        => $this->input->post('id_prestasi'), 
                'judul_prestasi'    => $this->input->post('judul_prestasi'),
                'isi_prestasi'      => $this->input->post('isi_prestasi'),
            );
        }else{
            $data = array(
                'id_prestasi'        => $this->input->post('id_prestasi'), 
                'judul_prestasi'    => $this->input->post('judul_prestasi'),
                'isi_prestasi'      => $this->input->post('isi_prestasi'),
                'gambar_prestasi'    => $dir.$this->upload->data('file_name'),
            );
        }
        $produk = $this->Admin_Dashboard->update('prestasi',$data,$where);
        redirect('admin/Prestasi');
    }
}

 ?>

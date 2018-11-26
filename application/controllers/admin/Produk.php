<?php
/**
 *
 */
class Produk extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Produk/v_produk');
  }

  function tambah_produk(){
  	$data = array(
            'kategori_produk'  => $this->Admin_Dashboard->select('kategori_produk')->result(),);
    $this->load->view('admin/Produk/v_tambahdata_produk',$data);
  }
  function insert(){
    $dir = 'assets/images_upload/foto_produk/';
        $config['upload_path']      = 'assets/images_upload/foto_produk/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_produk')) {
            echo $this->upload->display_errors();
        }else{
        $kategori_produk= $this->input->post('kategori_produk');
        $data = array(
            'id_produk' => "",
            'nama_produk' => $this->input->post('nama_produk'),
            'harga_produk' => $this->input->post('harga_produk'),
            'berat_produk' => $this->input->post('berat_produk'),
            'satuan_produk' => $this->input->post('satuan_produk'),
            'jenis_satuan_produk' => $this->input->post('jenis_produk'),
            'detail_produk' => $this->input->post('detail_produk'),
            'id_kategori_produk' => $this->input->post('kategori_produk'),
            'gambar_produk' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('produk',$data);
        redirect('admin/Produk');
        }
    }
}

 ?>

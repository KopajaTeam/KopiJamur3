<?php
/**
 *
 */
class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }

  public function index(){
    $data = array('produk' => $this->Admin_Dashboard->select_produk()->result(), ); 
    $this->load->view('admin/Produk/v_produk',$data);
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

    function hapus($id_produk){
        $where = array('id_produk' => $id_produk);
        $this->Admin_Dashboard->delete($where,'produk');
        redirect('admin/Produk');
    }
 
    function edit($id_produk){
        $where = array('id_produk' => $id_produk);
        $produk = $this->Admin_Dashboard->selectwhere('produk',$where)->row();
        $data = array(
            'kategori_produk'   => $this->Admin_Dashboard->select('kategori_produk')->result(),
            'id_kategori_produk'=> $produk->id_kategori_produk, 
            'id_produk'         => $produk->id_produk, 
            'nama_produk'       => $produk->nama_produk,
            'detail_produk'     => $produk->detail_produk,
            'jenis_produk'      => $produk->jenis_satuan_produk,
            'harga_produk'      => $produk->harga_produk,
            'berat_produk'      => $produk->berat_produk,
            'satuan_produk'     => $produk->satuan_produk,
            'gambar_produk'     => $produk->gambar_produk,
        );
        $this->load->view('admin/Produk/edit_produk', $data);
    }

    function update(){        
        $where = array('id_produk' => $this->input->post('id'));
        $dir = 'assets/images_upload/foto_produk/';
        $config['upload_path']      = 'assets/images_upload/foto_produk/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_produk')) {
            $data = array(
                'id_kategori_produk' => $this->input->post('kategori_produk'), 
                'nama_produk'       => $this->input->post('nama_produk'),
                'detail_produk'     => $this->input->post('detail_produk'),
                'jenis_satuan_produk'      => $this->input->post('jenis_produk'),
                'harga_produk'      => $this->input->post('harga_produk'),
                'berat_produk'      => $this->input->post('berat_produk'),
                'satuan_produk'     => $this->input->post('satuan_produk'),
            );
        }else{
            $data = array(
                'id_kategori_produk' => $this->input->post('kategori_produk'), 
                'nama_produk'       => $this->input->post('nama_produk'),
                'detail_produk'     => $this->input->post('detail_produk'),
                'jenis_satuan_produk'      => $this->input->post('jenis_produk'),
                'harga_produk'      => $this->input->post('harga_produk'),
                'berat_produk'      => $this->input->post('berat_produk'),
                'satuan_produk'     => $this->input->post('satuan_produk'),
                'gambar_produk'     => $dir.$this->upload->data('file_name'),
            );
        }
        $produk = $this->Admin_Dashboard->update('produk',$data,$where);
        redirect('admin/Produk');
    }
}

 ?>

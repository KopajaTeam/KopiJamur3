<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
        $this->load->model('M_galery');
    }


    public function index(){
      $user=$this->session->userdata('id_user');
      $data['keranjang'] = $this->K_jamur->keranjang($user);
      $data ['gallery']   = $this->M_galery->gal()->result();
      $data["forum"] = $this->K_jamur->beforeforum()->result();
      $data["produk"]		= $this->K_jamur->produkall()->result();
      $this->load->view('menu/bayar', $data);
  }

  public function invoice(){
    $where = array('id_transaksi' => $id_transaksi);
    $transaksi = $this->K_jamur->selectwhere('transaksi',$where)->row();
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

function insert_transaksi(){
    if (isset($_POST['minus'])) {
        $where = array(
            'id_produk' => $this->input->post('id_produk'), 
            'id_user'   => $this->session->userdata('id_user')
        );
        $qty = $this->input->post('qty');
        $data = array('qty' =>$qty-1  );
        $insert=$this->K_jamur->update('keranjang',$data,$where);
            // die($where);
        if ($insert  >= 0) {
            redirect(base_url('Keranjang#cart'));
        } else {
            echo "gagal";
        }
    }else if (isset($_POST['plus'])) {
        $where = array(
            'id_produk' => $this->input->post('id_produk'), 
            'id_user'   => $this->session->userdata('id_user')
        );
        $qty = $this->input->post('qty');
        $data = array('qty' =>$qty+1  );
        $insert=$this->K_jamur->update('keranjang',$data,$where);
            // die($where);
        if ($insert  >= 0) {
            redirect(base_url('Keranjang#cart'));
        } else {
            echo "gagal";
        }
    } 
}
function hapus($kd_keranjang){
    $where = array('kd_keranjang' => $kd_keranjang);
    $this->Admin_Dashboard->delete($where,'keranjang');
    redirect(base_url('Keranjang#cart'));
}
}

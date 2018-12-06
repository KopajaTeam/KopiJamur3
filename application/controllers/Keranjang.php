<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('K_jamur');
    }


    public function index(){
      $user=$this->session->userdata('id_user');
      $data['keranjang'] = $this->K_jamur->keranjang($user);
      $data["forum"] = $this->K_jamur->beforeforum()->result();
      $data["produk"]		= $this->K_jamur->produkall()->result();
      $this->load->view('menu/bayar', $data);
  }

  public function invoice(){
      $this->load->view('menu/invoice');
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

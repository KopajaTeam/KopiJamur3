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
    $this->load->view('admin/Produk/v_tambahdata_produk');
  }
}

 ?>

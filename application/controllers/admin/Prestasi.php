<?php
/**
 *
 */
class Prestasi extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Prestasi/v_prestasi');
  }

  function tambah_prestasi(){
    $this->load->view('admin/Prestasi/v_tambahdata_prestasi');
  }
}

 ?>

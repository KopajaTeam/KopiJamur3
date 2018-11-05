<?php
/**
 *
 */
class Gallery extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Gallery/v_gallery');
  }

  function tambah_gallery(){
    $this->load->view('admin/Gallery/v_tambahdata_gallery');
  }
}

 ?>

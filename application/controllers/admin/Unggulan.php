<?php
/**
 *
 */
class Unggulan extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Unggulan/v_unggulan');
  }

  function tambah_unggulan(){
    $this->load->view('admin/Unggulan/v_tambahdata_unggulan');
  }
}

 ?>

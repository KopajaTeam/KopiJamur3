<?php
/**
 *
 */
class Admin extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Admin/v_admin');
  }

  function tambah_admin(){
    $this->load->view('admin/Admin/v_tambahdata_admin');
  }
}

 ?>

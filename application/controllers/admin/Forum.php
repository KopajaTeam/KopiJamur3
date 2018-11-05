<?php
/**
 *
 */
class Forum extends CI_Controller
{

  public function index(){
    $this->load->view('admin/Forum/v_forum');
  }

  function tambah_forum(){
    $this->load->view('admin/Forum/v_tambahdata_forum');
  }
}

 ?>

<?php
/**
 *
 */
class User extends CI_Controller
{

  public function index(){
    $this->load->view('admin/User/v_user');
  }

  function tambah_user(){
    $this->load->view('admin/User/v_tambahdata_user');
  }

  function edit_user(){
  	$this->load->view('admin/User/v_edit_datauser');
  }
}

 ?>

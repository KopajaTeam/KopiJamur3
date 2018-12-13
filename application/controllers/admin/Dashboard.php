<?php

class Dashboard extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
        $this->load->model('M_testi');
        $this->load->model('K_jamur');
  		if (!$this->session->userdata('status')=="login") {       	
  			redirect('Admin/Login_adm');
        }
    }
	
	public function index(){
    $data['transaksi'] = $this->Admin_Dashboard->detail_transaksi_adm()->result(); 
		$this->load->view('admin/v_home',$data);
	}

  public function konfirmasi_transaksi($id_transaksi){
          $where = array('id_transaksi' => $id_transaksi);
          $data = array('status' => 2, );
          $this->db->update('transaksi',$data,$where);
          redirect('admin/Dashboard');
  }
  function hapus($id_transaksi){
        $where = array('id_transaksi' => $id_transaksi);
        $this->Admin_Dashboard->delete($where,'transaksi');
        redirect('admin/Dashboard');
    }

}
<?php
/**
 *
 */
class Testimonial extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('M_testi');
		$this->load->model('Admin_Dashboard');
		$this->load->model('K_jamur');
	}

	public function index(){
		$data ["testimoni"] = $this->M_testi->testi()->result();
		$this->load->view('admin/Testimonial/v_testimonial',$data);
	}
	function deletdata($id_testimoni){
		$where = array('id_testimoni' => $id_testimoni);
		$this->Admin_Dashboard->delete($where,'testimoni');
		redirect('admin/Testimonial');
	}
}

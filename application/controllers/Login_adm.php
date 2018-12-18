<?php
/**
 *
 */
class Login_adm extends CI_Controller
{
	parent::_construct();
	$this->load->model('Admin_Dashboard');

  public function index(){
    $this->load->view('admin/login');
  }

  function proses_login(){
  	$email = $this->input->post('email');
  	$password = $this->input->post('password');
  	$pass = array(
  		'email_admin' => $email,
  		'password_admin' => $pass,
  	);

  	$cek = $this->Admin_Dashboard->cek_login("admin",$where)->num_rows();
  	if ($cek > 0) {
  		$data_session = array(
  			'nama' => $email,
  			'status' => "login"
  		);

  		$this->session->set_userdata($data_session);
  		redirect(base_url("admin/login"));
  		$this->session->set_flashdata("Pesan",$this->core->alert_success("Login Success"));
  	}else{
  		$this->session->set_flashdata("Pesan",$this->core->alert_time("E-Mail dan Password tidak terdaftar"));
  		redirect(base_url("login"))
  	}

  }

  function logout(){
  	$this->session->session_destroy();
  	redirect(base_url('login'))
  }
}

 ?>

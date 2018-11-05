<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_user extends CI_Controller {

	public function __construct() {
          parent::__construct();
          $this->load->model('K_jamur');
     }


	public function index(){
		$this->load->view('user/login/login');
	}

	function proses_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => $password,
        );

        $cek = $this->K_jamur->cek_login("user",$where);
        if ($cek > 0) {
        	$data_user=$this->K_jamur->selectwhere("user", $where)->row();
            $data_session = array(
            	'id_user' => $data_user->id_user,
                'nama' => $email,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url());
            //$this->session->set_flashdata("Pesan",$this->core->alert_success("Login Success"));
            ?>
            <script type="text/javascript">
                alert("login Success");
            </script>
            <?php
        }else{
            //$this->session->set_flashdata("Pesan",$this->core->alert_time("E-Mail dan Password tidak terdaftar"));
            ?>
            <script type="text/javascript">
                alert("login Success");
            </script>
            <?php
            redirect(base_url());
        }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

}

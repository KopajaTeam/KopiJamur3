_<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_adm extends CI_Controller {

    public function __construct() {
          parent::__construct();
          $this->load->model('Admin_Dashboard');
     }


    public function index(){
        $this->load->view('admin/login');
    }

    function proses_login(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email_admin' => $email,
            'password_admin' => $password,
        );

        $cek = $this->Admin_Dashboard->cek_login("admin",$where);
        if ($cek == 1) {
            $data_admin=$this->Admin_Dashboard->selectwhere("admin", $where)->row();
            $data_session = array(
                'id_admin' => $data_admin->id_admin,
                'nama_admin' => $email,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);
            redirect(base_url('admin/Dashboard'));
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
                alert("login Failed");
            </script>
            <?php
            redirect(base_url('admin/Login_adm'));
        }

    }

    function logout(){
        $this->session->sess_destroy();
        redirect('admin/Login_adm');
    }

}

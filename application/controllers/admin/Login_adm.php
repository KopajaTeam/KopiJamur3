<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_adm extends CI_Controller {

    public function __construct() {
          parent::__construct();
          $this->load->model('K_jamur');
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

<<<<<<< HEAD
        $cek = $this->Admin_Dashboard->cek_login("admin",$where);
        if ($cek == 1) {
            $data_admin=$this->Admin_Dashboard->selectwhere("admin", $where)->row();
=======
        $cek = $this->K_jamur->cek_login("admin",$where);
        if ($cek > 0) {
            $data_admin=$this->K_jamur->selectwhere("admin", $where)->row();
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
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
<<<<<<< HEAD
            redirect(base_url('admin/Login_adm'));
=======
            redirect(base_url('admin/login'));
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
        }

    }

    function logout(){
        $this->session->sess_destroy();
<<<<<<< HEAD
        redirect('admin/Login_adm');
=======
        redirect(base_url());
>>>>>>> 6cd8d15ff996bce617abfb03fce86ab99763bb8a
    }

}

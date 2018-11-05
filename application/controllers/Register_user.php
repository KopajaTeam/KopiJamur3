<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_user extends CI_Controller {


	public function index(){
		$this->load->view('user/register/register');
	}
	function insert(){
		$dir = 'assets/images_upload/';
        $config['upload_path']      = 'assets/images_upload/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('gambar_user')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'nama' => $this->input->post('nama_user'),
            'alamat' => $this->input->post('alamat_user'),
            'email' => $this->input->post('email_user'),
            'password' => $this->input->post('password_user'),
            'foto' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('user',$data);
        redirect('Register_user');
        }
    }

}

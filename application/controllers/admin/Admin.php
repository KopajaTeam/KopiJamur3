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
  function insert(){
    $dir = 'assets/images_upload/foto_admin/';
        $config['upload_path']      = 'assets/images_upload/foto_admin/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('foto_admin')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_admin' => "",
            'nama_admin' => $this->input->post('nama_admin'),
            'alamat_admin' => $this->input->post('alamat_admin'),
            'email_admin' => $this->input->post('email_admin'),
            'password_admin' => $this->input->post('password_admin'),
            'foto_admin' => $dir.$this->upload->data('file_name'),
        );
        $this->db->insert('admin',$data);
        redirect('admin/Admin');
        }
    }
}

 ?>

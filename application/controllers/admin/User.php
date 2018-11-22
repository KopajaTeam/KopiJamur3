<?php
/**
 *
 */
class User extends CI_Controller
{

  public function index(){
    $this->load->view('admin/User/v_user');
  }
    function insert(){
    $dir = 'assets/images_upload/';
        $config['upload_path']      = 'assets/images_upload/foto_user/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['max_size']         = '2048';
            $this->load->library('upload', $config);
            $this->upload->initialize($config); 
        if (!$this->upload->do_upload('foto_user')) {
            echo $this->upload->display_errors();
        }else{
        $data = array(
            'id_user' => "",
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'foto' => $dir.$this->upload->data('foto'),
        );
        $this->db->insert('user',$data);
        redirect('admin/User');
        }
    }
}

 ?>

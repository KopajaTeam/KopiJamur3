<?php
/**
 *
 */
class Kritik_saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
        // if (!$this->session->userdata('status')=="login") {          
        //     redirect('Admin/Login_adm');
        // }
    }

    public function index(){
        $data ['Kritik_saran'] =$this->Admin_Dashboard->select('Kritik_saran')->result();
        $this->load->view('user/konten',$data);
    }
 function insert(){
    $data = array(
        'id_kritik_saran' => "",
        'nama_kritik_saran' => $this->input->post('nama_kritik_saran'),
        'email_kritik_saran' => $this->input->post('email_kritik_saran'),
        'isi_kritik_saran' => $this->input->post('isi_kritik_saran'),
    );
    $this->db->insert('Kritik_saran',$data);
    redirect(base_url());
}
}

?>

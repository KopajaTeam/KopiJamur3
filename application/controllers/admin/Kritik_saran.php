<?php
class Kritik_saran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Dashboard');
    }

    public function index(){
    $data = array('Kritik_saran' => $this->Admin_Dashboard->select('Kritik_saran')->result(), ); 
    $this->load->view('admin/Kritik_saran/v_kritik_saran',$data);
    }

    function hapus($id_kritik_saran){
    $where = array('id_kritik_saran' => $id_kritik_saran);
    $this->Admin_Dashboard->delete($where,'kritik_saran');
    redirect(base_url('admin/Kritik_saran'));
}
}
?>
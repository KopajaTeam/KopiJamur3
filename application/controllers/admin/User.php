    <?php
    /**
     *
     */
    class User extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Admin_Dashboard');
            if (!$this->session->userdata('status')=="login") {          
            redirect('Admin/Login_adm');
        }
        }

        public function index(){
            $data = array('user' => $this->Admin_Dashboard->select('user')->result(), );
            $this->load->view('admin/User/v_user',$data);
        }
        function lihat_user($id_user){
            $where = array('id_user' => $id_user);
            $user = $this->Admin_Dashboard->selectwhere('user',$where)->row();
            $data = array(
                'id_user'           => $user->id_user,
                'nama'              => $user->nama, 
                'alamat'            => $user->alamat, 
                'email'             => $user->email,
                'tgl_lahir'         => $user->tgl_lahir,
                'jenis_kelamin'     => $user->jenis_kelamin,
                'telp'              => $user->telp,
                'member_sejak'      => $user->member_sejak,
                'foto'              => $user->foto,
            );
            $this->load->view('admin/User/detail_user', $data);
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
        function hapus($id_user){
            $where = array('id_user' => $id_user);
            $this->Admin_Dashboard->delete($where,'user');
            redirect('admin/User');
        }
    }

    ?>

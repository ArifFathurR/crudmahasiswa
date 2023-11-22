<?php
defined('BASEPATH') or exit('no direct sript access allowed');
class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');

    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('email','Email','trim|valid_email',[
            'valid_email' =>'email Harus Valid',
            'required'=>'Email Wajib Di Isi'
        ]);
        $this->form_validation->set_rules('password','Password','trim|required',[
            'required' =>'Password Wajib Di isi'
        ]);
        if ($this->form_validation->run()==false) {
            $this->load->view('layout/auth_header');
            $this->load->view('auth/login');
            $this->load->view('layout/auth_footer');
        }else {
            $this->cek_login();
        }
       
    }

    public function registrasi()
    {
        if ($this->session->userdata('email'))    {
            redirect('Mahasiswa');
        }
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
            'is_unique' =>'Email ini sudah valid',
            'valid_email' => 'Email Harus Valid',
            'required' =>'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password tidak sama',
                'valid_email' =>'Password Terlalu Pendek',
                'required' =>'Password harus di isi'
            ]
        );
        $this->form_validation->set_rules('password2','Password','required|trim|matches[password]');
        if ($this->form_validation->run()==false) {
            $data['title'] ='Registration';
            $this->load->view('layout/auth_header',$data);
            $this->load->view('auth/register');
            $this->load->view('layout/auth_footer');
        }else {
            $data =[
                'nama'=> htmlspecialchars($this->input->post('nama',true)),
                'email' => htmlspecialchars($this->input->post('email',true)),
                'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => 'User',
                'date_created' => time()
            ];
            $this->userrole->insert($data);
            $this->session->set_flashdata('messege', '<div class="alert alert-succes" role="alert">
        selamat akunmu telah berhasil terdaftar, silahkan login!</div>');
        redirect('Auth');
        }
        
    }

    // public function cek_regis()
    // {
    //     $data = [
    //         'nama' => htmlspecialchars($this->input->post('nama', true)),
    //         'email' => htmlspecialchars($this->input->post('email', true)),
    //         'password' =>password_hash($this->input->post('password'), true),
    //         'gambar' => 'default.jpg',
    //         'role' => 'User',
    //         'date_created' => time()
    //     ];
    //     $this->userrole->insert($data);
    //     $this->session->set_flashdata('messege', '<div class="alert alert-succes" role="alert">
    //     selamat akunmu telah berhasil terdaftar, silahkan login!</div>');
    //     redirect('Auth');
    // }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data =[
                    'email' => $user['email'],
                    'role' =>$user['role'],
                    'id' => $user['id'],
                ];
                $this->session->set_userdata($data);
                if ($user['role'] == 'Admin') {
                    redirect('Mahasiswa');
                }else {
                    redirect('Profil');
                }
            }else {
                $this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('auth');
            }
        }else {
            $this->session->set_flashdata('messege', '<div class="alert alert-danger" role="alert">Email belum terdaftar </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('messege', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('auth');

    }
}
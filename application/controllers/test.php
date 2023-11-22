<?php
defined('BASEPATH') or exit('no direct script acces allowed');
class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view("layoutquiz/header");
        $this->load->view("test/vw_home");
        $this->load->view("layoutquiz/footer");
    }


    public function login()
    {
        $this->load->view('layout/auth_header');
        $this->load->view('test/vw_test');
        $this->load->view('layout/auth_footer');

    }
    public function regis()
    {
        $this->load->view('layout/auth_header');
        $this->load->view('test/vw_regis');
        $this->load->view('layout/auth_footer');
    }

    public function lenkapidata()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nisn' => $this->input->post('nisn'),
            'nik' => $this->input->post('nik'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'no_wa' => $this->input->post('no_wa'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kab_tinggal' => $this->input->post('kab_tinggal'),
            'kec_tinggal' => $this->input->post('kec_tinggal'),
            'kab_sekolah' => $this->input->post('kab_sekolah'),
            'sekolah_asal' => $this->input->post('sekolah_asal'),
            'jurusan' => $this->input->post('jurusan'),
            'tahun_lulus' => $this->input->post('tahun_lulus'),


        ];
       
        
        $this->load->view("layoutquiz/header");
        $this->load->view("test/vw_lengkapi_data");
        $this->load->view("layoutquiz/footer");
        $this->session->set_userdata($data);
    }

    public function cek_regis()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'password' => $this->input->post('password'),
        ];
        $this->session->set_userdata($data);
        redirect('test/login');
    }

    public function cek_login()
    {

        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == "admin@gmail.com" and $password == "admin") {
            
            redirect('test/lenkapidata');
        } else {
            redirect('');
        }
    }


}
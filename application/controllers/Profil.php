<?php
defined('BASEPATH') or exit ('no direct script acces allowed');
class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        
    }
    public function index()
    {
        
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header_user",$data);
        $this->load->view("profil/vw_profil",$data);
        $this->load->view("layout/footer");
    }
}
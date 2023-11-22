<?php
defined('BASEPATH') or exit('no direct sript access allowed');
class Client extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       

    }
    public function index()
    {
        $file = file_get_contents('http://localhost:8000/mahasiswa');
        $json = json_decode($file);

        $data['mahasiswa'] = $json->data;
        $this->load->view('v_client',$data);
    }
}
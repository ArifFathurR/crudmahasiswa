<?php
defined('BASEPATH') or exit ('no direct script acces allowed');
class Tampilanlaundry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('Latihan');
    }

    function index()
    {
        $this->latihan->hitung('Ani','6.5',false,false);
        $this->latihan->hitung('Ani','8',true,false);
        $this->latihan->hitung('Ani','3.5',false,true);
    }

}
?>
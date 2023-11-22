<?php
defined('BASEPATH') or exit ('no direct script acces allowed');
class Hitungpersegi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('persegi');
    }

    public function index()
    {
        $this->persegi->keliling('110');
        echo "<br/>";
        $this->persegi->luas('10');
    }

}
?>

<?php
defined('BASEPATH') or exit ('no direct sript access allowed');
class Perpustakaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Perpustakaan_model');
    } 

    public function index(){
        $data['perpustakaan'] = $this->Perpustakaan_model->get(); 
        $this->load->view('layout/header');
        $this->load->view('perpustakaan/vw_perpustakaan',$data);
        $this->load->view('layout/footer');
    }

    public function tambah(){
        $this->load->view('layout/header');
        $this->load->view('perpustakaan/vw_tambah_perpus');
        $this->load->view('layout/footer');
    }

    public function edit($id)
    {
        
        $data['perpustakaan']= $this->Perpustakaan_model->getByid($id);
        $this->load->view("layout/header", $data);
        $this->load->view("perpustakaan/vw_edit_perpus", $data);
        $this->load->view("layout/footer");
    }

    public function upload()
    {
        $data=[
            'nama_buku' =>$this->input->post('nama_buku'),
            'genre_buku' =>$this->input->post('genre_buku'),
            'tanggal_peminjaman' =>$this->input->post('tanggal_peminjaman'),
            'tangggal_pengembalian' =>$this->input->post('tangggal_pengembalian'),
            'nomor_anggota' =>$this->input->post('nomor_anggota'),
            'nama_peminjam' =>$this->input->post('nama_peminjam'),
            


        ];
        $this->Perpustakaan_model->insert($data);
        redirect('Perpustakaan');
    }


    public function update()
    {
        $data=[
            'nama_buku' =>$this->input->post('nama_buku'),
            'genre_buku' =>$this->input->post('genre_buku'),
            'tanggal_peminjaman' =>$this->input->post('tanggal_peminjaman'),
            'tangggal_pengembalian' =>$this->input->post('tangggal_pengembalian'),
            'nomor_anggota' =>$this->input->post('nomor_anggota'),
            'nama_peminjam' =>$this->input->post('nama_peminjam'),
            

        ];
        $id=$this->input->post('id');
        $this->Perpustakaan_model->update(['id'=>$id],$data);
        redirect('Perpustakaan');
    }
    public function hapus($id)
    {
        $this->Perpustakaan_model->delete($id);
        redirect('Perpustakaan');
    }
}

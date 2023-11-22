<?php
defined('BASEPATH') or exit('no direct sript access allowed');
class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pendaftaran_model');
        $this->load->model('User_model');
    }
    public function index()
    { 
        $data['judul'] = "Halaman Prodi";
        $data['daftar'] = $this->Pendaftaran_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("pendaftaran/vw_pd", $data);
        $this->load->view("layout/footer");
    }

    public function tambah(){
        $data['judul'] = "Halaman Pendaftaran";
        $data['user'] = $this->db->get_where('user', [
            'email' =>
                $this->session->userdata('email')
        ])->row_array();
        $data['daftar'] = $this->Pendaftaran_model->get();
        $this->form_validation->set_rules('nisn', 'nisn siswa', 'required', [
            'required' => 'nisn siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'nama siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('ttl', 'TTL', 'required', [
            'required' => 'Tempat tanggal lahir siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => 'alamat siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('asal_sekolah', 'asal_sekolah', 'required', [
            'required' => 'asal sekolah siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
            'required' => 'jenis kelamin siswa Wajib di isi'
        ]);
        $this->form_validation->set_rules('agama', 'agama', 'required', [
            'required' => 'agama siswa Wajib di isi',
            
        ]);
        $this->form_validation->set_rules('nayah', 'nayah', 'required', [
            'required' => 'nama Ayah dari siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('nibu', 'nibu', 'required', [
            'required' => 'nama ibu dari siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('pekerjaan_ortu', 'pekerjaan_ortu', 'required', [
            'required' => 'pekerjaan ortu siswa Wajib di isi',
        ]);
        $this->form_validation->set_rules('no_hp_ortu', 'no_hp_ortu', 'required', [
            'required' => 'no hp ortu siswa Wajib di isi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pendaftaran/vw_pendaftaran", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nisn' => $this->input->post('nisn'),
                'nama' => $this->input->post('nama'),
                'ttl' => $this->input->post('ttl'),
                'alamat' => $this->input->post('alamat'),
                'asal_sekolah' => $this->input->post('asal_sekolah'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'agama' => $this->input->post('agama'),
                'nayah' => $this->input->post('nayah'),
                'nibu' => $this->input->post('nibu'),
                'pekerjaan_ortu' => $this->input->post('pekerjaan_ortu'),
                'no_hp_ortu' => $this->input->post('no_hp_ortu'),
            ];
            $this->Pendaftaran_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
    role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
            redirect('Pendaftaran');
        }
    }
}

<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                   Formulir Pendaftaran
                </div>
                <div class="card-body">
                    <p><?php echo $this->session->userdata('nama');?></p>
                    <p><?php echo $this->session->userdata('nisn');?></p>
                    <p><?php echo $this->session->userdata('nik');?></p>
                    <p><?php echo $this->session->userdata('email');?></p>
                    <p><?php echo $this->session->userdata('no_hp');?></p>
                    <p><?php echo $this->session->userdata('no_wa');?></p>
                    <p><?php echo $this->session->userdata('tempat_lahir');?></p>                 
                    <p><?php echo $this->session->userdata('tanggal_lahir');?></p>        
                    <p><?php echo $this->session->userdata('jenis_kelamin');?></p>        
                    <p><?php echo $this->session->userdata('kab_tinggal');?></p>   
                    <p><?php echo $this->session->userdata('kec_tinggal');?></p> 
                    <p><?php echo $this->session->userdata('kab_sekolah');?></p>       
                    <p><?php echo $this->session->userdata('sekolah_asal');?></p>     
                    <p><?php echo $this->session->userdata('jurusan');?></p>       
                    <p><?php echo $this->session->userdata('tahun_lulus');?></p>                 
                </div>
            </div>
        </div>
    </div><br>

   
</div>
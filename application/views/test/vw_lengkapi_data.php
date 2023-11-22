<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Pendaftaran PSUD reguler
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message');?>

                    <form action="test/lenkapidata" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?php echo $this->session->userdata('nama')?>" class="form-control" id="nama" >
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>         
                        <div class="form-group">
                            <label for="nama">NISN</label>
                            <input type="text" name="nisn"  class="form-control" id="nama" >
                            <?= form_error('nisn','<small class="text-danger pl-3">','</small>');?>
                        </div>     
                        <div class="form-group">
                            <label for="nama">NIK</label>
                            <input type="text" name="nik"  class="form-control" id="nama">
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>   
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="text" name="email" value="<?php echo $this->session->userdata('email')?>" class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>                      
                        <div class="form-group">
                            <label for="nama">No Hp</label>
                            <input type="text" name="no_hp" value="<?php echo $this->session->userdata('no_hp')?>" class="form-control" id="nama" >
                            <?= form_error('no_hp','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">No whatapp</label>
                            <input type="text" name="no_wa"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>  
                        <div class="form-group">
                            <label for="nama">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>  
                        <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input type="text" name="tanggal_lahir"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div>  
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <select name="jenis_kelamin"  id="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>             
                            <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Kabupaten Tinggal</label>
                            <input type="text" name="kab_tinggal"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div> 
                        <div class="form-group">
                            <label for="nama">Kecamatan Tinggal</label>
                            <input type="text" name="kec_tinggal"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div> 
                        <div class="form-group">
                            <label for="nama">Kabupaten Sekolah</label>
                            <input type="text" name="kab_sekolah" class="form-control" id="nama">
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div> 
                        <div class="form-group">
                            <label for="nama">Sekolah Asal</label>
                            <input type="text" name="sekolah_asal"  class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div> 
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan"  id="jurusan" class="form-control">
                                <option value="Teknik Informarika">Teknik Informarika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                            </select>             
                            <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tahun Lulus</label>
                            <input type="text" name="tahun_lulus" class="form-control" id="nama" >
                            <?= form_error('nik','<small class="text-danger pl-3">','</small>');?>
                        </div> 
                        <br>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
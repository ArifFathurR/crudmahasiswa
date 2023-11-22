<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Pendaftaran Siswa Baru SMP
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                    <form action="" method="post" enctype="multipart/from-data">
                    <div class="form-group">
                            <label for="nisn">NISN </label>
                            <input type="text" name="nisn" value="<?= set_value('nisn');?>" class="form-control" id="nama" placeholder="nisn">
                            <?= form_error('nisn','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" name="nama" value="<?= set_value('nama');?>" class="form-control" id="nama" placeholder="Nama ">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Tanggal lahir</label>
                            <input type="date" name="ttl" value="<?= set_value('ttl');?>" class="form-control" id="ttl" placeholder="Tempat Tanggal lahir">
                            <?= form_error('ttl','<small class="text-danger pl-3">','</small>');?>
                        </div>
                    
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat"  value="<?= set_value('alamat');?>"class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="asal_sekolah">Asal Sekolah</label>
                            <input type="text" name="asal_sekolah"  value="<?= set_value('alamat');?>"class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis kelamin</label>
                            <select name="jenis_kelamin" value="<?= set_value('jenis_kelamin');?>" id="jenis_kelamin" class="form-control">
                                <option value="Laki-Laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>             
                            <?= form_error('jenis_kelamin','<small class="text-danger pl-3">','</small>');?>
                       
                        <div class="form-group">
                            <label for="agama">Agama</label>
                            <input type="text" name="agama" value="<?= set_value('agama');?>" class="form-control" id="agama" placeholder="agama">                  
                            <?= form_error('agama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nayah">Nama Ayah</label>
                            <input type="text" name="nayah" value="<?= set_value('nayah');?>"class="form-control" id="nayah" placeholder="Nama Ayah">
                            <?= form_error('nayah','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nibu">Nama ibu</label>
                            <input type="text" name="nibu" class="form-control" value="<?= set_value('nibu');?>"id="nibu" placeholder="Nama ibu">
                            <?= form_error('nibu','<small class="text-danger pl-3">','</small>');?>

                        </div>
                        <div class="form-group">
                            <label for="pekerjaan_ortu">Pekerjaan Orang tua</label>
                            <input type="text" name="pekerjaan_ortu" class="form-control" value="<?= set_value('pekerjaan_ortu');?>"id="nibu" placeholder="Pekerjaan Orang tua">
                            <?= form_error('pekerjaan_ortu','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp_ortu">No hp orang tua</label>
                            <input type="text" name="no_hp_ortu" class="form-control" value="<?= set_value('no_hp_ortu');?>"id="no_hp_ortu" placeholder="No hp orang tua">
                            <?= form_error('no_hp_ortu','<small class="text-danger pl-3">','</small>');?>

                        </div>
                        <br>
                        <a href="<?= base_url('index.php/Prodi')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Siswa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

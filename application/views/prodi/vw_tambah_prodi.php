<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                    <form action="" method="post" enctype="multipart/from-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= set_value('nama');?>" class="form-control" id="nama" placeholder="Nama Prodi">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= set_value('ruangan');?>" class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" aria-placeholder="Pilih jurusan" value="<?= set_value('jurusan');?>"class="form-control">
                               
                                <option value="JTIN">JTIN</option>
                                <option value="JTI">JTI</option>
                            </select>                            
                            <?= form_error('jurusan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi"  value="<?= set_value('akreditasi');?>"class="form-control" id="akreditasi" placeholder="Akreditasi">
                            <?= form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>

                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= set_value('nama_kaprodi');?>" class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">                  
                            <?= form_error('nama_kaprodi','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= set_value('tahun_berdiri');?>"class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                            <?= form_error('tahun_berdiri','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="output_jurusan">Output Lulusan</label>
                            <input type="text" name="output_jurusan" class="form-control" value="<?= set_value('output_jurusan');?>"id="output_jurusan" placeholder="Output Lulusan">
                            <?= form_error('output_jurusan','<small class="text-danger pl-3">','</small>');?>

                        </div>
                        <div class="form-group">
                            <label for="gambar">gambar</label>
                            <input type="file" name="gambar" class="form-control"id="gambar" >
                        </div>
                        <br>
                        <a href="<?= base_url('index.php/Prodi')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
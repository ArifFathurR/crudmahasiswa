<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                <?= $this->session->flashdata('message');?>
                    <form action="" method="post"  enctype="multipart/from-data">
                    <input type="hidden" name="id" value="<?= $prodi['id'];?>"> </input>
                    <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="nama" value="<?= $prodi['nama'];?>" class="form-control" id="nama" placeholder="Nama Prodi">
                            <?= form_error('nama','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruangan" value="<?= $prodi['ruangan'];?>"class="form-control" id="ruangan" placeholder="Ruangan">
                            <?= form_error('ruangan','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" value="<?= $prodi['jurusan'];?>"class="form-control">
                               
                                <option value="JTIN">JTIN</option>
                                <option value="JTI">JTI</option>
                            </select>
                            <?= form_error('jurusan','<small class="text-danger pl-3">','</small>');?>                           
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" name="akreditasi" value="<?= $prodi['akreditasi'];?>"class="form-control" id="akreditasi" placeholder="Akreditasi">
                            <?= form_error('akreditasi','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_kaprodi" value="<?= $prodi['nama_kaprodi'];?>"class="form-control" id="nama_kaprodi" placeholder="Nama Kaprodi">                  
                            <?= form_error('nama_kaprodi','<small class="text-danger pl-3">','</small>');?> 
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun_berdiri" value="<?= $prodi['tahun_berdiri'];?>"class="form-control" id="tahun_berdiri" placeholder="Tahun Berdiri">
                            <?= form_error('tahun_berdiri','<small class="text-danger pl-3">','</small>');?>
                        </div>
                        <div class="form-group">
                            <label for="output_jurusan">Output Lulusan</label>
                            <input type="text" name="output_jurusan" value="<?= $prodi['output_jurusan'];?>"class="form-control" id="output_jurusan" placeholder="Output Lulusan">
                            <?= form_error('output_jurusan','<small class="text-danger pl-3">','</small>');?>

                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/prodi/') . $prodi['gambar'];?>" style="width: 100px;" class="img-thumnail">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" value="<?= $prodi['gambar'];?>"class="form-control" id="gambar" >
                            <?= form_error('gambar','<small class="text-danger pl-3">','</small>');?>
                        </div>
                                          <br>
                        <a href="<?= base_url('index.php/Mahasiswa')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="" class="btn btn-primary float right">Ubah Data Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

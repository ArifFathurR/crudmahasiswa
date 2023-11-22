<br>
<div class="container-fluid">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Perpustakaan
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Perpustakaan/update')?>" method="post">
                    <input type="hidden" name="id" value="<?= $perpustakaan['id'];?>">
                        <div class="form-group">
                            <label for="nama_buku">Nama Buku</label>
                            <input type="text" name="nama_buku" class="form-control" id="nama" placeholder="Nama Buku" value="<?= $perpustakaan['nama_buku'];?>">
                        </div>
                        <div class="form-group">
                            <label for="genre_buku">Genre Buku</label>
                            <input type="text" name="genre_buku" value="<?= $perpustakaan['genre_buku'];?>"class="form-control" id="nama" placeholder="Genre Buku" >

                                                   
                        </div>
                        <div class="form-group">
                            <label for="tanggal_peminjaman"> Tanggal Peminjaman</label>
                            <input type="date" name="tanggal_peminjaman" value="<?= $perpustakaan['tanggal_peminjaman'];?>" class="form-control" id="tanggal_peminjaman" placeholder=" Tanggal Peminjaman">
                        </div>
                        <div class="form-group">
                            <label for="tangggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="tangggal_pengembalian"  value="<?= $perpustakaan['tangggal_pengembalian'];?>"class="form-control" id="no_hp" placeholder="Tanggal Pengembalian">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Nomor Anggota</label>
                            <input type="text" name="nomor_anggota" value="<?= $perpustakaan['nomor_anggota'];?>" class="form-control" id="email" placeholder="Nomor Anggota">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Nama Peminjam</label>
                            <input type="text" name="nama_peminjam" value="<?= $perpustakaan['nama_peminjam'];?>" class="form-control" id="alamat" placeholder="Nama Peminjam">
                        </div>
                        
                        
                        
                        <br>
                        <a href="<?= base_url('Perpustakaan')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float right">Tambah Mahasiswa</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
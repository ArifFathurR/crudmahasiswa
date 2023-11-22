<div class="app-wrapper">
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">
					<h1 class="app-page-title">Overview</h1>
					<h1 class="h3 mb-4 text-gray-800"></h1>
					<div class="row">
						<div class="col-md-6">
						<a href="<?=base_url()?>Perpustakaan/tambah/"class="btn btn-info mb-2">tambah Prodi</a>
						</div>
						<div class="col-md-12">
							<table class="table">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama Buku</td>
										<td>Genre_buku</td>
										<td>Tanggal Peminjaman</td>
										<td>Tanggal Pengembalian</td>
                                        <td>Nomor Anggota</td>
                                        <td>Nama Peminjam</td>
                                        
                                        <td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($perpustakaan as $pr) : ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $pr['nama_buku'];?></td>
										<td><?= $pr['genre_buku'];?></td>
										<td><?= $pr['tanggal_peminjaman'];?></td>
										<td><?= $pr['tangggal_pengembalian'];?></td>
										<td><?= $pr['nomor_anggota'];?></td>
										<td><?= $pr['nama_peminjam'];?></td>
										
										<td>
                                        <a href="<?= base_url('Perpustakaan/hapus/') . $pr['id'];?>"class = "btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('Perpustakaan/edit/') . $pr['id'];?>"class = "btn btn-warning">Edit</a>
										</td>
									</tr>
									<?php $i++?>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!--//container-fluid-->
			</div>
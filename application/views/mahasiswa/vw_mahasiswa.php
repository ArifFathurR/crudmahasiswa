<div class="app-wrapper">
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">
					<h1 class="app-page-title">Overview</h1>
					<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
					<div class="row">
						<div class="col-md-6">
                            <a href="<?=base_url()?>index.php/Mahasiswa/tambah/" class="btn btn-info mb-2">tambah Mahasiswa</a>
							
						</div>
						<div class="col-md-12">
						<?= $this->session->flashdata('message');?>
							<table class="table">
								<thead>
									<tr>
										<td>No</td>
										<td>Nama</td>
										<td>Nim</td>
										<td>Email</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php $i = 1; ?>
									<?php foreach($mahasiswa as $us ) : ?>
										<tr>
											<td><?= $i;?></td>
											<td><?= $us['nama'];?></td>
											<td><?= $us['nim'];?></td>
											<td><?= $us['email'];?></td>
											<td>
												<a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id'];?>" class="btn btn-danger">Hapus</a>
												<a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']; ?>" class = "btn btn-warning">Edit</a>
												<a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id'];?>" class ="btn btn-info">Details</a>
											</td>
										</tr>
										<?php $i++; ?>
										<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!--//container-fluid-->
			</div>
<div class="app-wrapper">
			<div class="app-content pt-3 p-md-3 p-lg-4">
				<div class="container-xl">
					<h1 class="app-page-title">Overview</h1>
					
					<div class="row">
						<div class="col-md-6">
						<a href="<?=base_url()?>Pendaftaran/tambah" class="btn btn-info mb-2">tambah Siswa</a>
						</div>
						<?= $this->session->flashdata('message');?>
						<div class="col-md-12">
						
							<table class="table">
								<thead>
									<tr>
										<td>No</td>
										<td>NISN </td>
										<td>Nama</td>
										<td>Tempat Tanggal lahir</td>
										<td>Alamat</td>
                                        <td>Asal Sekolah</td>
                                        <td>Jenis kelamin</td>
                                        <td>Agama</td>
										<td>Nama Ayah</td>
                                        <td>Nama ibu</td>
										<td>Pekerjaan Orang tua</td>
										<td>No hp orang tua</td>
										<td>Action</td>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($daftar as $p) : ?>
									<tr>
										<td><?= $i;?></td>
										<td><?= $p['nisn'];?></td>
										<td><?= $p['nama'];?></td>
										<td><?= $p['ttl'];?></td>
										<td><?= $p['alamat'];?></td>
										<td><?= $p['asal_sekolah'];?></td>
										<td><?= $p['jenis_kelamin'];?></td>
										<td><?= $p['agama'];?></td>
										<td><?= $p['nayah'];?></td>
										<td><?= $p['nibu'];?></td>
										<td><?= $p['pekerjaan_ortu'];?></td>
										<td><?= $p['no_hp_ortu'];?></td>
									
										<td>
											<a href="<?= base_url('Pendaftaran/hapus/') . $p['nisn'];?>" class = "btn btn-danger">Hapus</a>
											
									<?php $i++?>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!--//container-fluid-->
			</div>
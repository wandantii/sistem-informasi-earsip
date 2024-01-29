<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Buku Ekspedisi Ekstern</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('arsip_baru'); ?>">Arsip Baru</a></li>
            <span>»</span>
            <li><a href="<?php echo base_url('arsip_baru'); ?>">Halaman Utama</a></li>
            <span>»</span>
            <li class="active">Buku Ekspedisi Ekstern</li>
        </ol>
    </div>
</section>

<section id="main">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
					<a href="<?php echo base_url(); ?>identitas" class="list-group-item">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Identitas
					</a>
					<a href="<?php echo base_url(); ?>data_unit" class="list-group-item">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Unit
					</a>
					<a href="<?php echo base_url(); ?>data_instansi" class="list-group-item">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi
					</a>
					<a href="<?php echo base_url(); ?>pokok_soal" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Pokok Soal
					</a>
					<a href="<?php echo base_url(); ?>arsip_baru" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru
					</a>
					<a href="<?php echo base_url(); ?>pinjam_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip
					</a>
					<a href="<?php echo base_url(); ?>petugas" class="list-group-item">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Petugas
					</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Arsip Baru - Buku Ekspedisi Ektern</h3>
					</div>
					<div class="panel-body">
					<?php if (!$this->session->userdata('logged_in')) { ?>
						<a href="<?php base_url(); ?>eksterne" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-log-out"></span>
							Ekspor Excel
						</a>
						<div class="dropdown" style="display:inline;">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-book"></span>
								<span>Buku Agenda dan Ekspedisi</span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" style="margin-top:10px;">
							<li><a href="<?php base_url(); ?>masuk">
								Agenda Surat Masuk
							</a></li>
							<li><a href="<?php base_url(); ?>keluar">
								Agenda Surat Keluar
							</a></li>
							<li><a href="<?php base_url(); ?>intern">
								Buku Ekspedisi Intern
							</a></li>
							</ul>
						</div>
					<?php } else { ?>
						<a href="<?php base_url(); ?>eksterne" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-log-out"></span>
							Ekspor Excel
						</a>
						<div class="dropdown" style="display:inline;">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
								<span class="glyphicon glyphicon-book"></span>
								<span>Buku Agenda dan Ekspedisi</span>
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu" style="margin-top:10px;">
							<li><a href="<?php base_url(); ?>masuk">
								Agenda Surat Masuk
							</a></li>
							<li><a href="<?php base_url(); ?>keluar">
								Agenda Surat Keluar
							</a></li>
							<li><a href="<?php base_url(); ?>intern">
								Buku Ekspedisi Intern
							</a></li>
							</ul>
						</div>
					<?php } ?>
						<br><br>
						<div>
							<table class="table table-bordered table-hover" id="manageMemberTable" width="100%">
								<thead>
									<tr>
										<th>Tanggal Kirim</th>
										<th>Tanggal dan No Surat</th>
										<th>Dikirim Kepada</th>
										<th>Nama Penerima</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $d) { ?>
                                        <?php if ($d->jenis_surat == 'K'){?>
									<tr>
										<td><?php echo $d->tgl_simpan; ?></td>
										<td><?php echo $d->tgl_surat; ?> / <a href="<?php echo base_url('arsip_baru/surat/'.$d->id_arsip);?>"><?php echo $d->no_surat; ?></a></td>
										<td><?php echo $d->dari_kepada; ?></td>
										<td>
											<?php if($d->tgl_diterima == '0000-00-00') {
												echo "Belum diterima";
											} else {
												echo $d->penerima;
											} ?>
										</td>
										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="glyphicon glyphicon-cog"></span>
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<?php
														if (!$this->session->userdata('logged_in')) { ?>
															<li>
																<a href="<?php echo base_url('arsip_baru/view/'.$d->id_arsip); ?>" type="button">
																	Detail Data
																</a>
															</li>
															<li>
																<a href="<?php echo base_url('arsip_baru/cetak/'.$d->id_arsip); ?>" type="button">
																	Cetak Kartu Kendali
																</a>
															</li>
													<?php } else { ?>
															<li>
																<a href="<?php echo base_url('arsip_baru/view/'.$d->id_arsip); ?>" type="button">
																	Detail Data
																</a>
															</li>
															<li>
																<a href="<?php echo base_url('arsip_baru/cetak/'.$d->id_arsip); ?>" type="button">
																	Cetak Kartu Kendali
																</a>
															</li>
															<li>
																<a type="button" href="<?php echo base_url('arsip_baru/update/'.$d->id_arsip); ?>">
																	Ubah Data							
																</a>	
															</li>
															<li>
																<a type="button" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?');" href="<?php echo base_url('arsip_baru/delete/'.$d->id_arsip); ?>">
																	Hapus Data
																</a>
															</li>
													<?php } ?>
												</ul>
											</div>
										</td>
									</tr>
									<?php } } ?>
								</tbody>
							</table>
							<!-- deleteMember -->
							<div class="modal fade" tabindex="-1" id="deleteData">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Hapus Data</h4>
										</div>
										<div class="modal-body">
											<p>Apakah anda benar-benar ingin menghapus data ini?</p>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
											<a type="button" href="<?php echo base_url('arsip_baru/delete/'.$d->id_arsip); ?>" class="btn btn-primary">Hapus</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END deleteMember -->
						</div>
					</div>
				</div>
			</div>
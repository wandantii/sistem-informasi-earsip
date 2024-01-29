<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Pokok Soal <small> Halaman Utama</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pokok_soal'); ?>">Pokok Soal</a></li>
            <span>»</span>
            <li class="active">Halaman Utama</li>
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
					<a href="<?php echo base_url(); ?>data_instansi" class="list-group-item">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi
					</a>
					<a href="<?php echo base_url(); ?>data_unit" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Unit
					</a>
					<a href="<?php echo base_url(); ?>pokok_soal" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Pokok Soal
					</a>
					<a href="<?php echo base_url(); ?>arsip_baru" class="list-group-item">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru
					</a>
					<a href="<?php echo base_url(); ?>pinjam_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip
					</a>
					<a href="<?php echo base_url(); ?>petugas" class="list-group-item">
						<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Petugas
					</a>
					<a href="<?php echo base_url(); ?>cari_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Cari Arsip
					</a>
				</div>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default">
					<div class="panel-heading main-color-bg">
						<h3 class="panel-title">Pokok Soal</h3>
					</div>
					<div class="panel-body">
						<?php if ($this->session->userdata('logged_in')) { ?>
							<a href="<?php base_url(); ?>pokok_soal/insert" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-plus"></span>
								Tambah Pokok Soal
							</a>
							<br><br>
						<?php } ?>
						<div>
							<table class="table table-bordered table-hover" id="manageMemberTable" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Unit</th>
										<th>Kode</th>
										<th>Keterangan</th>
										<?php if ($this->session->userdata('logged_in')) { ?>
											<th></th>
										<?php } ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $d){ ?>
									<tr>
										<td><?php echo $d->id_pokoksoal; ?></td>
										<td><?php echo $d->unit; ?></td>
										<td><?php echo $d->kode_pokoksoal; ?></td>
										<td><?php echo $d->pokoksoal; ?></td>
										<?php if ($this->session->userdata('logged_in')) { ?>
											<td>
												<div class="dropdown">
													<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
														<span class="glyphicon glyphicon-cog"></span>
														<span class="caret"></span>
													</button>
													<ul class="dropdown-menu">
														<li>
															<a type="button" href="<?php echo base_url('pokok_soal/update/'.$d->id_pokoksoal); ?>">
																Ubah Data							
															</a>	
														</li>
														<li>
															<a type="button" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?');" href="<?php echo base_url('pokok_soal/delete/'.$d->id_pokoksoal); ?>">
																Hapus Data
															</a>
														</li>
													</ul>
												</div>
											</td>
										<?php } ?>
									</tr>
									<?php } ?>
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
											<a type="button" href="<?php echo base_url('pokok_soal/delete/'.$d->id_pokoksoal); ?>" class="btn btn-primary">Hapus</a>
										</div>
									</div>
								</div>
							</div>
							<!-- END deleteMember -->
						</div>
					</div>
				</div>
			</div>
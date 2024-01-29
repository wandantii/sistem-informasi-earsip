<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi <small> Halaman Utama</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('data_instansi'); ?>">Data Instansi</a></li>
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
					<a href="<?php echo base_url(); ?>data_instansi" class="list-group-item active main-color-bg">
						<span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi
					</a>
					<a href="<?php echo base_url(); ?>data_unit" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Unit
					</a>
					<a href="<?php echo base_url(); ?>pokok_soal" class="list-group-item">
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
						<h3 class="panel-title">Data Instansi</h3>
					</div>
					<div class="panel-body">
						<?php if ($this->session->userdata('logged_in')) { ?>
							<a href="<?php base_url(); ?>data_instansi/insert" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-plus"></span>
								Tambah Instansi
							</a>
							<br><br>
						<?php } ?>
						<div>
							<table class="table table-bordered table-hover" id="manageMemberTable" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Keterangan</th>
										<th>Alamat</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $d){?>
									<tr>
										<td><?php echo $d->id_instansi; ?></td>
										<td><?php echo $d->instansi; ?></td>
										<td><?php echo $d->keterangan; ?></td>
										<td><?php echo $d->alamat; ?></td>
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
																<a href="<?php echo base_url('data_instansi/view/'.$d->id_instansi); ?>" type="button">
																	Detail Data
																</a>
															</li>
													<?php } else { ?>
															<li>
																<a href="<?php echo base_url('data_instansi/view/'.$d->id_instansi); ?>" type="button">
																	Detail Data
																</a>
															</li>
															<li>
																<a type="button" href="<?php echo base_url('data_instansi/update/'.$d->id_instansi); ?>">
																	Ubah Data							
																</a>	
															</li>
															<li>
																<a type="button" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?');" href="<?php echo base_url('data_instansi/delete/'.$d->id_instansi); ?>">
																	Hapus Data
																</a>
															</li>
													<?php } ?>
												</ul>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip <small> Halaman Utama</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pinjam_arsip'); ?>">Pinjam Arsip</a></li>
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
					<a href="<?php echo base_url(); ?>pokok_soal" class="list-group-item">
						<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Data Pokok Soal
					</a>
					<a href="<?php echo base_url(); ?>arsip_baru" class="list-group-item">
						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru
					</a>
					<a href="<?php echo base_url(); ?>pinjam_arsip" class="list-group-item active main-color-bg">
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
						<h3 class="panel-title">Pinjam Arsip</h3>
					</div>
					<div class="panel-body">
						<?php if ($this->session->userdata('logged_in')) { ?>
							<a href="<?php base_url(); ?>pinjam_arsip/insert" class="btn btn-info" role="button">
								<span class="glyphicon glyphicon-plus"></span>
								Tambah Pinjam Arsip
							</a>
						<?php } ?>
						<a href="<?php base_url(); ?>pinjam_arsip/eksport" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-log-out"></span>
							Ekspor Excel
						</a>
						<a href="<?php base_url(); ?>kembali_arsip" class="btn btn-info" role="button">
							<span class="glyphicon glyphicon-log-out"></span>
							Pengembalian Arsip
						</a>
						<br><br>
						<div>
							<table class="table table-bordered table-hover" id="manageMemberTable" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>ID Arsip</th>
										<th>Nama Peminjam</th>
										<th>Tanggal Pinjam</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php 
										foreach ($data as $d) { 
											if (($d->tanggal_kembali == '') && ($d->kondisi_kembali == '')){
									?>
									<tr>
										<td><?php echo $d->id_pinjam; ?></td>
										<td><?php echo $d->id_arsip; ?></td>
										<td><?php echo $d->nama_peminjam; ?></td>
										<td><?php echo $d->tanggal_pinjam; ?></td>
										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="glyphicon glyphicon-cog"></span>
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li>
														<a href="<?php echo base_url('pinjam_arsip/view/'.$d->id_pinjam); ?>" type="button">
															Detail Data
														</a>
													</li>
													<li>
														<a href="<?php echo base_url('pinjam_arsip/cetak/'.$d->id_pinjam); ?>" type="button">
															Cetak Kartu Pinjam
														</a>
													</li>
													<?php if ($this->session->userdata('logged_in')) { ?>
														<li>
															<a type="button" href="<?php echo base_url('pinjam_arsip/update/'.$d->id_pinjam); ?>">
																Ubah Data							
															</a>	
														</li>
														<li>
															<a type="button" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?');" href="<?php echo base_url('pinjam_arsip/delete/'.$d->id_pinjam); ?>">
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
						</div>
					</div>
				</div>
			</div>
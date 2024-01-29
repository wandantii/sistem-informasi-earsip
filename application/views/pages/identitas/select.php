<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Identitas <small> Halaman Utama</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('identitas'); ?>">Identitas</a></li>
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
					<a href="<?php echo base_url(); ?>identitas" class="list-group-item active main-color-bg">
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
						<h3 class="panel-title">Identitas</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<?php foreach ($data as $d) { ?>
								<div class="col-md-4">
									<img src="<?php echo base_url('assets/img/'.$d->logo); ?>" style="width:100%;" />
								</div>
								<div class="col-md-8">
									<h2><?php echo $d->nama; ?></h2>
									<h4><?php echo $d->keterangan; ?></h4>
									<h4><?php echo $d->alamat; ?></h4>
									<p>Telp. <?php echo $d->no_telp; ?>, email: <?php echo $d->email; ?>, website: <?php echo $d->web; ?></p>
									<?php if ($this->session->userdata('logged_in')) { ?>
										<a class="btn btn-success pull-right" href="<?php echo base_url('identitas/update/'.$d->id_identitas); ?>">
											<span class="glyphicon glyphicon-pencil"></span>
											Ubah
										</a>
									<?php } ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
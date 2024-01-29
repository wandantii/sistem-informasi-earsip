<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip <small> Detail Data</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pinjam_arsip'); ?>">Pinjam Arsip</a></li>
            <span>»</span>
			<li><a href="<?php echo base_url('pinjam_arsip'); ?>">Halaman Utama</a></li>
            <span>»</span>
            <li class="active">Detail Data</li>
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
						<h3 class="panel-title">Arsip Baru - Lihat Arsip</h3>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label>ID Arsip</label>
							<input type="text" class="form-control" name="id_arsip" value="<?php echo $data->id_arsip; ?>" />
						</div>
						<div class="form-group">
							<label>Nama Peminjam</label>
							<input type="text" class="form-control" name="nama_peminjam" value="<?php echo $data->nama_peminjam; ?>" />
						</div>
						<div class="form-group">
							<label>Tanggal Pinjam</label>
							<input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $data->tanggal_pinjam; ?>" />
						</div>
						<div class="form-group">
							<label>Batas Waktu</label>
							<input type="date" class="form-control" name="batas_waktu" value="<?php echo $data->batas_waktu; ?>" />
						</div>
						<div class="form-group">
							<label>Petugas</label>
							<input type="text" class="form-control" name="petugas" value="<?php echo $data->petugas; ?>" readonly />
						</div>
						<div class="form-group">
							<label>Kondisi Pinjaman</label>
							<input type="text" name="kondisi_pinjam" class="form-control" value="<?php echo $data->kondisi_pinjam; ?>">
						</div>
						<a href="<?php echo base_url(); ?>pinjam_arsip" class="btn btn-success">Kembali</a>
					</div>
				</div>
			</div>
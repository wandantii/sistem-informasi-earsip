<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Data Instansi <small> Ubah Data</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
			<li><a href="<?php echo base_url('data_instansi'); ?>">Data Instansi</a></li>
            <span>»</span>
			<li><a href="<?php echo base_url('data_instansi'); ?>">Halaman Utama</a></li>
            <span>»</span>
            <li class="active">Ubah Data</li>
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
						<h3 class="panel-title">Data Instansi - Ubah Data Instansi</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart(base_url('data_instansi/getupdate')); ?>
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_instansi; ?>" />
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="instansi" value="<?php echo $data->instansi; ?>" />
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="keterangan" value="<?php echo $data->keterangan; ?>" />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" value="<?php echo $data->alamat; ?>" />
							</div>
							<div class="form-group">
								<label>No. Telp</label>
								<input type="text" class="form-control" name="no_telp" value="<?php echo $data->no_telp; ?>" />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="text" class="form-control" name="email" value="<?php echo $data->email; ?>" />
							</div>
							<div class="form-group">
								<label>Website</label>
								<input type="text" class="form-control" name="website" value="<?php echo $data->website; ?>" />
							</div>
							<div class="form-group">
								<label>Logo</label><br>
								<img src="<?php echo base_url('assets/img/'.$data->logo); ?>" width="200" height="200" />
							</div>
							<div class="form-group">
								<a href="<?php echo base_url(); ?>data_instansi" class="btn btn-success">Kembali</a>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Petugas <small> Tambah Data</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('petugas'); ?>">Petugas</a></li>
            <span>»</span>
			<li><a href="<?php echo base_url('petugas'); ?>">Halaman Utama</a></li>
            <span>»</span>
            <li class="active">Tambah Data</li>
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
					<a href="<?php echo base_url(); ?>pinjam_arsip" class="list-group-item">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip
					</a>
					<a href="<?php echo base_url(); ?>petugas" class="list-group-item active main-color-bg">
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
						<h3 class="panel-title">Petugas - Tambah Petugas</h3>
					</div>
					<div class="panel-body">
						<form action="getdata" method="post">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" class="form-control" name="name" placeholder="Nama" required />
							</div>
							<div class="form-group">
								<label>Kelas</label>
								<input type="text" class="form-control" name="class" placeholder="Kelas" required />
							</div>
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" placeholder="Email" required />
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" name="username" placeholder="Username" required />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="password" placeholder="Password" required />
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan" />
								<a href="<?php echo base_url(); ?>petugas" class="btn btn-success">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
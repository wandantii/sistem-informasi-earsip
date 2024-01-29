<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Detail Data</small></h1>
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
					<a href="<?php echo base_url(); ?>arsip_baru" class="list-group-item active main-color-bg">
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
						<h3 class="panel-title">Arsip Baru - Lihat Arsip</h3>
					</div>
					<div class="panel-body">
					<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_arsip; ?>" />
							</div>
							<div class="form-group">
								<label>Dari / Kepada&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cari"><span class="glyphicon glyphicon-search"></span> Cari Instansi</button></label>
								<input type="text" class="form-control" name="dari_kepada" id="dari_kepada" value="<?php echo $data->dari_kepada; ?>" readonly />
								<input type="hidden" name="dari_kepada2" value="<?php echo $data->dari_kepada; ?>" />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data->alamat; ?>" readonly readonly />
								<input type="hidden" name="alamat2" value="<?php echo $data->alamat; ?>" />
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>Kota</label>
									<input type="text" class="form-control" name="kota" value="<?php echo $data->kota; ?>" readonly />
								</div>
								<div class="col-md-6 form-group">
									<label>Indeks</label>
									<input type="text" class="form-control" name="indeks" value="<?php echo $data->indeks; ?>" readonly />
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>No. Surat</label>
									<input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat; ?>" readonly />
								</div>
								<div class="col-md-6 form-group">
									<label>Tgl. Surat</label>
									<input type="date" class="form-control" name="tgl_surat" value="<?php echo $data->tgl_surat; ?>" readonly />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">	
									<label>Lampiran</label>
									<input type="text" class="form-control" name="lampiran" value="<?php echo $data->lampiran; ?>" readonly />
								</div>
								<div class="form-group col-md-6 col-sm-6">
									<label>Tgl. Simpan</label>
									<input type="date" class="form-control" name="tgl_simpan" value="<?php echo $data->tgl_simpan; ?>" readonly />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 form-group">
									<label>Jenis Surat</label>
									<input type="text" class="form-control" name="jenis_surat" value="<?php echo $data->jenis_surat; ?>" readonly />
								</div>
								<div class="col-md-6 col-sm-6 form-group">
									<label>B/R/SR</label>
									<input type="text" class="form-control" name="brsr" value="<?php echo $data->brsr; ?>" readonly />
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 form-group">
									<label>Unit</label>
									<input type="text" class="form-control" name="unit" value="<?php echo $data->unit; ?>" readonly />
								</div>
								<div class="col-md-4 col-sm-4 form-group">
									<label>Perihal</label>
									<input type="text" class="form-control" name="perihal" value="<?php echo $data->perihal; ?>" readonly />
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>File (jika file ingin diubah)</label>
									<input type="text" class="form-control" name="userfile2" value="<?php echo $data->file; ?>" readonly/>
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-4 col-sm-4">
									<label>Sistem Simpan</label>
									<input type="text" class="form-control" name="sistem_simpan" value="<?php echo $data->sistem_simpan; ?>" readonly />
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Kode Simpan</label>
									<input type="text" class="form-control" name="kode_simpan" id="kode_simpan" value="<?php echo $data->kode_simpan; ?>" readonly />
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Arsiparis</label>
									<input type="text" class="form-control" name="arsiparis" value="<?php echo $data->arsiparis; ?>" readonly />
								</div>
							</div>
							<div class="form-group">
								<label>Isi Ringkas</label>
								<textarea class="form-control" name="isi_ringkas" readonly><?php echo $data->isi_ringkas; ?></textarea>
							</div>
							<div class="form-group">
								<label>Catatan</label>
								<input class="form-control" name="catatan" value="<?php echo $data->catatan; ?>" readonly></input>
							</div>
							<div class="form-group">
								<label>Diteruskan Kepada</label>
								<textarea class="form-control" name="diteruskan_kepada" readonly><?php echo $data->diteruskan_kepada; ?></textarea>
							</div>
						<a href="<?php echo base_url(); ?>arsip_baru" class="btn btn-success">Kembali</a>
					</div>
				</div>
			</div>
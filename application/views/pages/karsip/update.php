<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip <small> Ubah Data Pengembalian</small></h1>
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
			<li><a href="<?php echo base_url('kembali_arsip'); ?>">Pengembalian Arsip</a></li>
			<span>»</span>
			<li class="active">Ubah Data Pengembalian</li>
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
						<h3 class="panel-title">Pengembalian Arsip - Ubah Data</h3>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url('kembali_arsip/getupdate'); ?>" method="post">
							<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_pinjam; ?>" />
							<input type="hidden" class="form-control" name="id_ars" value="<?php echo $data->id_arsip; ?>" />
							<div class="form-group">
								<label>ID Arsip</label>
								<input type="text" class="form-control" name="id_arsip" id="id_arsip" readonly required value="<?php echo $data->id_arsip; ?>" />
							</div>
							<div class="row col-sm-12" style="color:gray;">
										<p id="instansi">Dari/Kepada : 
										<?php 
											$sql = $this->db->get('tbl_arsip');
											foreach($sql->result() as $s){
												if ($data->id_arsip == $s->id_arsip){
													echo $s->dari_kepada;
												}
											}
										?>
										</p>
										<p id="alamat">Alamat : 
										<?php 
											$sql = $this->db->get('tbl_arsip');
											foreach($sql->result() as $s){
												if ($data->id_arsip == $s->id_arsip){
													echo $s->alamat;
												}
											}
										?>
										</p>
										<p id="perihal">Perihal : 
										<?php 
											$sql = $this->db->get('tbl_arsip');
											foreach($sql->result() as $s){
												if ($data->id_arsip == $s->id_arsip){
													echo $s->perihal;
												}
											}
										?>
										</p>
									</div>
							<div class="form-group">
								<label>Nama Peminjam</label>
								<input type="text" class="form-control" name="nama_peminjam" value="<?php echo $data->nama_peminjam; ?>" readonly required />
							</div>
							<div class="form-group">
								<label>Tanggal Pinjam</label>
								<input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $data->tanggal_pinjam; ?>" readonly required />
							</div>
							<div class="form-group">
								<label>Batas Waktu</label>
								<input type="date" class="form-control" name="batas_waktu" value="<?php echo $data->batas_waktu; ?>" readonly required />
							</div>
							<div class="form-group">
								<label>Petugas</label>
								<input type="text" class="form-control" name="petugas" value="<?php echo $petugas->name; ?>" readonly />
							</div>
							<div class="form-group">
								<label>Kondisi Pinjam</label>
								<input type="text" class="form-control" name="kondisi_pinjam" value="<?php echo $data->kondisi_pinjam; ?>" readonly required />
							</div>
							<div class="form-group">
								<label>Tanggal Kembali</label>
								<input type="date" class="form-control" name="tanggal_kembali" value="<?php echo $data->tanggal_kembali; ?>" readonly />
							</div>
							<div class="form-group">
								<label>Kondisi Pengembalian</label>
								<select name="kondisi_kembali" class="form-control" required>
									<?php if ($data->kondisi_kembali == 'Bagus') { ?>
										<option value="Bagus" selected>Bagus</option>
									<?php }
									else { ?>
										<option value="Bagus">Bagus</option>
									<?php }
									if ($data->kondisi_kembali == 'Sedang') { ?>
										<option value="Sedang" selected>Sedang</option>
									<?php } 
									else { ?>
										<option value="Sedang">Sedang</option>
									<?php }
									if ($data->kondisi_kembali == 'Kurang') { ?>
										<option value="Kurang" selected>Kurang</option>
									<?php } 
									else { ?>
										<option value="Kurang">Kurang</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan" />
								<a href="<?php echo base_url(); ?>kembali_arsip" class="btn btn-success">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
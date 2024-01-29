<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Pokok Soal <small> Ubah Data</small></h1>
			</div>
		</div>
	</div>
</header>

<section id="breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('pokok_soal'); ?>">Pokok Soal</a></li>
            <span>»</span>
			<li><a href="<?php echo base_url('pokok_soal'); ?>">Halaman Utama</a></li>
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
						<h3 class="panel-title">Pokok Soal - Ubah Pokok Soal</h3>
					</div>
					<div class="panel-body">
						<form method="post" action="<?php echo base_url('pokok_soal/getupdate'); ?>">
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_pokoksoal; ?>" />
							</div>
								<div class="form-group">
									<label>Unit</label>
									<input type="hidden" class="form-control" name="unit2" value="<?php echo $data->unit; ?>" required />
									<select name="unit" class="form-control" required>
									<?php foreach($units as $unit) : 
										if ($data->unit == $unit->unit) {
										?>
							                <option value="<?php echo $unit->unit; ?>" selected>
							                	<?php echo $unit->unit; ?>
							                </option>
										<?php } else { ?>
											<option value="<?php echo $unit->unit; ?>">
							                	<?php echo $unit->unit; ?>
							                </option>
							            <?php } endforeach; ?>
									</select>
								</div>
							<div class="form-group">
								<label>Kode</label>
								<input type="text" class="form-control" name="kode_pokoksoal" value="<?php echo $data->kode_pokoksoal; ?>" required />
								<input type="hidden" name="kode_pokoksoal2" value="<?php echo $data->kode_pokoksoal; ?>" />
							</div>
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" class="form-control" name="pokoksoal" value="<?php echo $data->pokoksoal; ?>" required />
								<input type="hidden" name="pokoksoal2" value="<?php echo $data->pokoksoal; ?>" />
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan">
								<a href="<?php echo base_url(); ?>pokok_soal" class="btn btn-success">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
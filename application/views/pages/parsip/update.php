<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip <small> Ubah Data</small></h1>
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
						<h3 class="panel-title">Pinjam Arsip - Ubah Data Pinjam Arsip</h3>
					</div>
					<div class="panel-body">
						<form action="<?php echo base_url('pinjam_arsip/getupdate'); ?>" method="post">
							<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_pinjam; ?>" />
							<input type="hidden" class="form-control" name="id_ars" value="<?php echo $data->id_arsip; ?>" />
							<div class="form-group">
							<label>ID Arsip</label>
								<div class="row">
									<div class="col-sm-2"><input type="text" class="form-control" name="id_arsip" id="id_arsip" readonly required value="<?php echo $data->id_arsip; ?>" /></div>
									<div class="col-sm-2">
									<button type="button" class="btn btn-info form-control" data-toggle="modal" data-target="#cari">
										<span class="glyphicon glyphicon-search"></span>
										Cari Arsip
									</button>
									</div>
									<div class="col-sm-8">
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
								</div>
							</div>
							<div class="form-group">
								<label>Nama Peminjam</label>
								<input type="text" class="form-control" name="nama_peminjam" value="<?php echo $data->nama_peminjam; ?>" required />
							</div>
							<div class="form-group">
								<label>Tanggal Pinjam</label>
								<input type="date" class="form-control" name="tanggal_pinjam" value="<?php echo $data->tanggal_pinjam; ?>" required />
							</div>
							<div class="form-group">
								<label>Batas Waktu</label>
								<input type="date" class="form-control" name="batas_waktu" value="<?php echo $data->batas_waktu; ?>" required />
							</div>
							<div class="form-group">
								<label>Petugas</label>
								<input type="text" class="form-control" name="petugas" value="<?php echo $petugas->name; ?>" readonly />
							</div>
							<div class="form-group">
								<label>Kondisi Pinjaman</label>
								<select name="kondisi_pinjam" class="form-control" required>
									<?php if ($data->kondisi_pinjam == 'Bagus') { ?>
										<option value="Bagus" selected>Bagus</option>
									<?php }
									else { ?>
										<option value="Bagus">Bagus</option>
									<?php }
									if ($data->kondisi_pinjam == 'Sedang') { ?>
										<option value="Sedang" selected>Sedang</option>
									<?php } 
									else { ?>
										<option value="Sedang">Sedang</option>
									<?php }
									if ($data->kondisi_pinjam == 'Kurang') { ?>
										<option value="Kurang" selected>Kurang</option>
									<?php } 
									else { ?>
										<option value="Kurang">Kurang</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan" />
								<a href="<?php echo base_url(); ?>pinjam_arsip" class="btn btn-success">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal fade" id="cari" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Cari Arsip</h4>
						</div>
						<div class="modal-body">
							<div class="table-responsive" style="width:96%;margin:auto;">
								<table class="table table-bordered table-hover" id="manageMemberTable">
									<thead>
										<tr>
											<th>No</th>
											<th>M/K</th>
											<th>Dari/Kepada</th>
											<th>Alamat</th>
											<th>No. Surat</th>
											<th>Tgl. Surat</th>
											<th>Arsiparis</th>
											<th>Kode Simpan</th>
											<th>Perihal</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											foreach ($cari as $c) { 
												if ($c->status == '0'){
										?>
										<tr onclick="pilih(<?php echo $c->id_arsip; ?>)" style="cursor:pointer;">
											<td><?php echo $c->id_arsip; ?></td>
											<td><?php echo $c->jenis_surat; ?></td>
											<td><?php echo $c->dari_kepada; ?></td>
											<td><?php echo $c->alamat; ?></td>
											<td><?php echo $c->no_surat; ?></td>
											<td><?php echo $c->tgl_surat; ?></td>
											<td><?php echo $c->arsiparis; ?></td>
											<td><?php echo $c->kode_simpan; ?></td>
											<td><?php echo $c->perihal; ?></td>
										</tr>
										<?php } } ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
			function pilih (id=null){
				<?php 
					$sql = $this->db->get('tbl_arsip');
					foreach($sql->result() as $s){	
				?>
				if (id == <?php echo $s->id_arsip; ?>) {
					document.getElementById("id_arsip").value = "<?php echo $s->id_arsip?>";
					document.getElementById("instansi").innerHTML = "Dari/Kepada : <?php echo $s->dari_kepada?>";
					document.getElementById("alamat").innerHTML = "Alamat : <?php echo $s->alamat?>";
					document.getElementById("perihal").innerHTML = "Perihal : <?php echo $s->perihal?>";
					$("#cari").modal('hide');
				}
				<?php } ?>
			}
		</script>
		
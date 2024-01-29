<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Pinjam Arsip <small> Tambah Data Pengembalian</small></h1>
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
		<li class="active">Tambah Data Pengembalian</li>
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
						<h3 class="panel-title">Pengembalian Arsip - Tambah Data</h3>
					</div>
					<div class="panel-body">
						<form action="getdata" method="post">
							<div class="form-group">
								<label>ID Arsip</label>
								<div class="row">
									<div class="col-sm-2"><input type="text" class="form-control" name="id_arsip" id="id_arsip" readonly required /></div>
									<div class="col-sm-3">
										<button type="button" class="btn btn-info form-control" data-toggle="modal" data-target="#cari">
											<span class="glyphicon glyphicon-search"></span>
											Cari Data Pinjam
										</button>
									</div>
									<div class="col-sm-7">
										<p id="instansi"></p>
										<p id="alamat"></p>
										<p id="perihal"></p>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Nama Peminjam</label>
								<input type="text" class="form-control" name="nama_peminjam" id="nama_peminjam" readonly required />
							</div>
							<div class="form-group">
								<label>Tanggal Pinjam</label>
								<input type="date" class="form-control" name="tanggal_pinjam" id="tanggal_pinjam" readonly required />
							</div>
							<div class="form-group">
								<label>Batas Waktu</label>
								<input type="date" class="form-control" name="batas_waktu" id="batas_waktu" readonly required />
							</div>
							<div class="form-group">
								<label>Petugas</label>
								<input type="text" class="form-control" name="petugas" id="petugas" readonly required />
							</div>
							<div class="form-group">
								<label>Kondisi Pinjam</label>
								<input type="text" class="form-control" name="kondisi_pinjam" id="kondisi_pinjam" readonly required />
							</div>
							<div class="form-group">
								<label>Tanggal Kembali</label>
								<input type="date" class="form-control" name="tanggal_kembali"  value="<?php echo date('Y-m-d'); ?>" required />
							</div>
							<div class="form-group">
								<label>Kondisi Kembali</label>
								<select name="kondisi_kembali" class="form-control" required>
							        <option value="Bagus">Bagus</option>
							        <option value="Sedang">Sedang</option>
							        <option value="Kurang">Kurang</option>
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
			<div class="modal fade" id="cari" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Cari Data Pinjam Arsip</h4>
						</div>
						<div class="modal-body">
							<div class="table-responsive" style="width:96%;margin:auto;">
								<table class="table table-bordered table-hover" id="manageMemberTable">
									<thead>
										<tr>
											<th>ID Arsip</th>
											<th>Nama Peminjam</th>
											<th>Tanggal Pinjam</th>
											<th>Batas Waktu</th>
											<th>Petugas</th>
											<th>Kondisi Pinjam</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											foreach ($data as $d) {
												if (($d->tanggal_kembali == '') && ($d->kondisi_kembali == '')){
										?>
										<tr onclick="pilih(<?php echo $d->id_arsip; ?>)" style="cursor:pointer;">
											<td><?php echo $d->id_arsip; ?></td>
											<td><?php echo $d->nama_peminjam; ?></td>
											<td><?php echo $d->tanggal_pinjam; ?></td>
											<td><?php echo $d->batas_waktu; ?></td>
											<td><?php echo $d->petugas; ?></td>
											<td><?php echo $d->kondisi_pinjam; ?></td>
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
					$sql = $this->db->get('tbl_pinjam');
					foreach($sql->result() as $s){	
				?>
				if (id == <?php echo $s->id_arsip; ?>) {
					document.getElementById("id_arsip").value = "<?php echo $s->id_arsip; ?>";
					document.getElementById("nama_peminjam").value = "<?php echo $s->nama_peminjam; ?>";
					document.getElementById("tanggal_pinjam").value = "<?php echo $s->tanggal_pinjam; ?>";
					document.getElementById("batas_waktu").value = "<?php echo $s->batas_waktu; ?>";
					document.getElementById("petugas").value = "<?php echo $s->petugas; ?>";
					document.getElementById("kondisi_pinjam").value = "<?php echo $s->kondisi_pinjam; ?>";
					$("#cari").modal('hide');
				}
				<?php } ?>
				<?php 
					$sql = $this->db->get('tbl_arsip');
					foreach($sql->result() as $q){	
				?>
				if (id == <?php echo $q->id_arsip; ?>) {
					document.getElementById("id_arsip").value = "<?php echo $q->id_arsip?>";
					document.getElementById("instansi").innerHTML = "Dari/Kepada : <?php echo $q->dari_kepada?>";
					document.getElementById("alamat").innerHTML = "Alamat : <?php echo $q->alamat?>";
					document.getElementById("perihal").innerHTML = "Perihal : <?php echo $q->perihal?>";
					$("#cari").modal('hide');
				}
				<?php } ?>
			}
		</script>
		
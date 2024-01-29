<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Tambah Data</small></h1>
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
						<h3 class="panel-title">Arsip Baru - Tambah Arsip</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart('arsip_baru/getdata'); ?>
							<div class="form-group">
								<label>Dari / Kepada&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cari"><span class="glyphicon glyphicon-search"></span> Cari Instansi</button></label>
								<input type="text" class="form-control" name="dari_kepada" id="dari_kepada" readonly required />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" readonly required />
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>Kota</label>
									<input type="text" class="form-control" name="kota" required />
								</div>
								<div class="col-md-6 form-group">
									<label>Indeks</label>
									<input type="text" class="form-control" name="indeks" required />
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>No. Surat</label>
									<input type="text" class="form-control" name="no_surat" required />
								</div>
								<div class="col-md-6 form-group">
									<label>Tgl. Surat</label>
									<input type="date" class="form-control" name="tgl_surat" value="<?php echo date('Y-m-d'); ?>" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">	
									<label>Lampiran</label>
									<input type="text" class="form-control" name="lampiran" required />
								</div>
								
								<div class="form-group col-md-6">
									<label>Tgl. Simpan</label>
									<input id="tanggal" type="date" class="form-control" name="tgl_simpan" value="<?php echo date('Y-m-d'); ?>" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 form-group">
									<label>Jenis Surat</label>
									<select name="jenis_surat" class="form-control" required>
										<option value="M">M</option>
										<option value="K">K</option>
									</select>
								</div>
								<div class="col-md-6 col-sm-6 form-group">
									<label>R/P/R</label>
									<select name="brsr" class="form-control" required>
							            <option value="Rahasia">Rahasia</option>
							            <option value="Penting">Penting</option>
							            <option value="Rutin">Rutin</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 form-group">
									<label>Unit</label>
									<select name="unit" id="unit" class="form-control" required>
                       					<option value="">Pilih Unit</option>
										<?php foreach($units as $unit) : ?>
							                <option value="<?php echo $unit->unit; ?>">
							                	<?php echo $unit->unit; ?>
							                </option>
							            <?php endforeach; ?>
									</select>
								</div>
								<div class="col-md-4 col-sm-4 form-group">
									<label>Pokok Soal</label>
									<select class="form-control" name="perihal" id="pokok_soal" onchange="getval(this)" required>
										<option value="">Pilih Pokok Soal</option>
										<?php foreach($pokoks as $pokok) : ?>
							                <option value="<?php echo $pokok->pokoksoal; ?>">
							                	<?php echo $pokok->unit ?>
												<?php echo " - "; ?>
												<?php echo $pokok->pokoksoal; ?>
							                </option>
							            <?php endforeach; ?>
									</select>
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>File</label>
									<input type="file" name="userfile" size="20" required />
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-4 col-sm-4">
									<label>Sistem Simpan</label>
									<select name="sistem_simpan" class="form-control" id="sistem_simpan" required>
							            <option value="Abjad" selected>Abjad</option>
							            <option value="Tanggal Surat">Tanggal Surat</option>
							            <option value="Pokok Soal">Pokok Soal</option>
							            <option value="Desimal">Desimal</option>
							            <option value="Terminal Digit">Terminal Digit</option>
							            <option value="Wilayah">Wilayah</option>
									</select>
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Kode Pokok Soal</label>
									<input type="text" class="form-control" name="kode_simpan" id="kode_simpan" readonly required />
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Arsiparis</label>
									<input type="text" class="form-control" name="arsiparis" value="<?php echo $petugas->name;?>" readonly />
								</div>
							</div>
							<div class="form-group">
								<label>Isi Ringkas</label>
								<textarea class="form-control" name="isi_ringkas" required></textarea>
							</div>
							<div class="form-group">
								<label>Catatan</label>
								<select class="form-control" id="catatan" name="catatan" required>
							        <option value="Segera Dibalas" selected>Segera Dibalas</option>
							        <option value="Harap Ditindak Lanjuti">Harap Ditindak Lanjuti</option>
								</select>
							</div>
							<div class="form-group">
								<label>Diteruskan Kepada (Maksimal 5)</label>
								<textarea class="form-control" name="diteruskan_kepada"></textarea>
								<p><i>Pisahkan dengan koma, contoh: Kepegawaian, Perekonomian, Pemerintahan, Umum, Kesejahteraan Rakyat</i></p>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan" />
								<a href="<?php echo base_url(); ?>arsip_baru" class="btn btn-success">Kembali</a>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="cari" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Cari Instansi</h4>
						</div>
						<div class="modal-body">
							<div class="table-responsive" style="width:96%;margin:auto;">
								<table class="table table-bordered table-hover" id="manageMemberTable">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Keterangan</th>
											<th>Alamat</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											foreach ($data as $d) {
										?>
										<tr onclick="pilih(<?php echo $d->id_instansi; ?>)" style="cursor:pointer;">
											<td><?php echo $d->id_instansi; ?></td>
											<td><?php echo $d->instansi; ?></td>
											<td><?php echo $d->keterangan; ?></td>
											<td><?php echo $d->alamat; ?></td>
										</tr>
										<?php } ?>
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

		<script type="text/javascript">
			function pilih (id){
				<?php 
					$sql = $this->db->get('tbl_instansi');
					foreach($sql->result() as $s){	
				?>
				if (id == <?php echo $s->id_instansi; ?>) {
					document.getElementById("dari_kepada").value = "<?php echo $s->instansi?>";
					document.getElementById("alamat").value = "<?php echo $s->alamat?>";
					$("#cari").modal('hide');
				}
				<?php } ?>
			}
			function unit (id){
				<?php 
					$sqlp = $this->db->get('tbl_unit');
					foreach($sqlp->result() as $p){	
				?>
				if (id == <?php echo $p->id_unit; ?>) {
					document.getElementById("unit").value = "<?php echo $p->unit?>";
				}
				<?php } ?>
			}
			function getval(sel) {
				var tampil;
				tampil = document.getElementById("kode_simpan");
				<?php
					$sqlq = $this->db->get('tbl_pokoksoal');
					foreach ($sqlq->result() as $q) {
				?>				
				if (sel.value == "<?php echo $q->pokoksoal; ?>"){
					tampil.value="<?php echo $q->kode_pokoksoal?>";
				}
				<?php 
					}
				?>
			}
		</script>
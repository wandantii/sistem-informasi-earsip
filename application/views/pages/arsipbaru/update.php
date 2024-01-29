<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Ubah Data</small></h1>
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
						<h3 class="panel-title">Arsip Baru - Ubah Arsip</h3>
					</div>
					<div class="panel-body">
						<?php echo form_open_multipart(base_url('arsip_baru/getupdate')); ?>
							<div class="form-group">
								<input type="hidden" class="form-control" name="id" value="<?php echo $data->id_arsip; ?>" />
							</div>
							<div class="form-group">
								<label>Dari / Kepada&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" data-toggle="modal" data-target="#cari"><span class="glyphicon glyphicon-search"></span> Cari Instansi</button></label>
								<input type="text" class="form-control" name="dari_kepada" id="dari_kepada" value="<?php echo $data->dari_kepada; ?>" readonly required />
								<input type="hidden" name="dari_kepada2" value="<?php echo $data->dari_kepada; ?>" />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $data->alamat; ?>" readonly required />
								<input type="hidden" name="alamat2" value="<?php echo $data->alamat; ?>" />
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>Kota</label>
									<input type="text" class="form-control" name="kota" value="<?php echo $data->kota; ?>" required />
								</div>
								<div class="col-md-6 form-group">
									<label>Indeks</label>
									<input type="text" class="form-control" name="indeks" value="<?php echo $data->indeks; ?>" required />
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6 form-group">
									<label>No. Surat</label>
									<input type="text" class="form-control" name="no_surat" value="<?php echo $data->no_surat; ?>" required />
								</div>
								<div class="col-md-6 form-group">
									<label>Tgl. Surat</label>
									<input type="date" class="form-control" name="tgl_surat" value="<?php echo $data->tgl_surat; ?>" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 form-group">	
									<label>Lampiran</label>
									<input type="text" class="form-control" name="lampiran" value="<?php echo $data->lampiran; ?>" required />
								</div>
								<div class="form-group col-md-6 col-sm-6">
									<label>Tgl. Simpan</label>
									<input type="date" class="form-control" name="tgl_simpan" value="<?php echo $data->tgl_simpan; ?>" required />
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6 form-group">
									<label>Jenis Surat</label>
									<select name="jenis_surat" class="form-control" required>
										<?php if ($data->jenis_surat == 'M') { ?>
											<option value="M" selected>M</option>
										<?php }
										else { ?>
											<option value="M">M</option>
										<?php }
										if ($data->jenis_surat == 'K') { ?>
											<option value="K" selected>K</option>
										<?php } 
										else { ?>
											<option value="K">K</option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-6 col-sm-6 form-group">
									<label>B/R/SR</label>
									<select name="brsr" class="form-control" required>
										<?php if ($data->brsr == 'Rahasia') { ?>
											<option value="Rahasia" selected>Rahasia</option>
										<?php }
										else { ?>
											<option value="Rahasia">Rahasia</option>
										<?php }
										if ($data->brsr == 'Penting') { ?>
											<option value="Penting" selected>Penting</option>
										<?php } 
										else { ?>
											<option value="Penting">Penting</option>
										<?php }
										if ($data->brsr == 'Rutin') { ?>
											<option value="Rutin" selected>Rutin</option>
										<?php } 
										else { ?>
											<option value="Rutin">Rutin</option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 form-group">
									<label>Unit</label>
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
								<div class="col-md-4 col-sm-4 form-group">
									<label>Perihal</label>
										<select name="perihal" class="form-control" onchange="getval(this)" required>
										<?php foreach($pokoks as $pokok) : 
											if ($data->perihal == $pokok->pokoksoal) {
											?>
												<option value="<?php echo $pokok->pokoksoal; ?>" selected>
													<?php echo $pokok->unit; ?> - 
													<?php echo $pokok->pokoksoal; ?>
												</option>
											<?php } else { ?>
												<option value="<?php echo $pokok->pokoksoal; ?>">
													<?php echo $pokok->unit; ?> - 
													<?php echo $pokok->pokoksoal; ?>
												</option>
										<?php } endforeach; ?>
									</select>
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>File (jika file ingin diubah)</label>
									<input type="file" name="userfile" />
									<input type="hidden" name="userfile2" value="<?php echo $data->file; ?>" />
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-4 col-sm-4">
									<label>Sistem Simpan</label>
									<select name="sistem_simpan" class="form-control" id="sisi" required>
										<?php if ($data->sistem_simpan == 'Abjad') { ?>
											<option value="Abjad" selected>Abjad</option>
										<?php }
										else { ?>
											<option value="Abjad">Abjad</option>
										<?php }
										if ($data->sistem_simpan == 'Tanggal Surat') { ?>
											<option value="Tanggal Surat" selected>Tanggal Surat</option>
										<?php } 
										else { ?>
											<option value="Tanggal Surat">Tanggal Surat</option>
										<?php }
										if ($data->sistem_simpan == 'Pokok Soal') { ?>
											<option value="Pokok Soal" selected>Pokok Soal</option>
										<?php } 
										else { ?>
											<option value="Pokok Soal">Pokok Soal</option>
										<?php }
										if ($data->sistem_simpan == 'Desimal') { ?>
											<option value="Desimal" selected>Desimal</option>
										<?php } 
										else { ?>
											<option value="Desimal">Desimal</option>
										<?php }
										if ($data->sistem_simpan == 'Terminal Digit') { ?>
											<option value="Terminal Digit" selected>Terminal Digit</option>
										<?php } 
										else { ?>
											<option value="Terminal Digit">Terminal Digit</option>
										<?php }
										if ($data->sistem_simpan == 'Wilayah') { ?>
											<option value="Wilayah" selected>Wilayah</option>
										<?php } 
										else { ?>
											<option value="Wilayah">Wilayah</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Kode Simpan</label>
									<input type="text" class="form-control" name="kode_simpan" id="kode_simpan" value="<?php echo $data->kode_simpan; ?>" required />
								</div>
								<div class="form-group col-md-4 col-sm-4">
									<label>Arsiparis</label>
									<input type="text" class="form-control" name="arsiparis" value="<?php echo $petugas->name; ?>" readonly />
								</div>
							</div>
							<div class="form-group">
								<label>Isi Ringkas</label>
								<textarea class="form-control" name="isi_ringkas" required><?php echo $data->isi_ringkas; ?></textarea>
							</div>
							<div class="form-group">
								<label>Catatan</label>
								<select class="form-control" id="catatan" name="catatan" required>
									<?php if ($data->catatan == 'Segera Dibalas') { ?>
										<option value="Segera Dibalas" selected>Segera Dibalas</option>
									<?php } else { ?>
										<option value="Segera Dibalas">Segera Dibalas</option>
									<?php } if ($data->catatan == 'Harap Ditindak Lanjuti') { ?>
										<option value="Harap Ditindak Lanjuti" selected>Harap Ditindak Lanjuti</option>
									<?php } else { ?>
										<option value="Harap Ditindak Lanjuti">Harap Ditindak Lanjuti</option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label>Diteruskan Kepada (Maksimal 5)</label>
								<textarea class="form-control" name="diteruskan_kepada"><?php echo $data->diteruskan_kepada; ?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-success" value="Simpan" />
								<a href="<?php echo base_url(); ?>arsip_baru" class="btn btn-success">Kembali</a>
							</div>
						<?php echo form_close(); ?>
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
											foreach ($cari as $c) {
										?>
										<tr onclick="pilih(<?php echo $c->id_instansi; ?>)" style="cursor:pointer;">
											<td><?php echo $c->id_instansi; ?></td>
											<td><?php echo $c->instansi; ?></td>
											<td><?php echo $c->keterangan; ?></td>
											<td><?php echo $c->alamat; ?></td>
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
			</script>
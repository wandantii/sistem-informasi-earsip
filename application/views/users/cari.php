    					<div class="container table-responsive" style="margin-top:50px;">

							<form method="GET" style="margin-bottom:50px;">
								<div class="row">
									<div class="col-md-4 form-group">
										<label>Tulis Abjad</label>
										<input type="text" class="form-control" name="abjad" required />
									</div>
								</div>
								<input type="submit" class="btn btn-info" value="Cari berdasarkan Abjad" name="kirim" /></br></br>
								<a class="btn btn-info" href="<?php echo base_url(); ?>cari_arsip">Reset pencarian Abjad</a>
							</form>

							<table class="table table-bordered table-hover" id="example" width="100%">
								<thead>
									<tr>
										<th>TANGGAL TERIMA</th>
										<th>NOMOR SURAT</th>
										<th>UNIT</th>
										<th>KODE SIMPAN</th>
										<th>TANGGAL SURAT</th>
										<th>DARI / KEPADA</th>
										<th>ALAMAT</th>
										<th>PERIHAL</th>
										<th>ISI RINGKAS</th>
										<th>KETERANGAN</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $d) { 
											$teks="$d->dari_kepada";
											$pecah=explode(" ",$teks);
											$kata = $pecah[1];
											$huruf = $kata[0];
										if (isset($_GET['kirim'])) {
											$abjad = $_GET['abjad'];
											if ($abjad == $huruf){ ?>
												<tr>
													<td><?php echo $d->tgl_simpan; ?></td>
													<td><?php echo $d->no_surat; ?></td>
													<td><?php echo $d->unit; ?></td>
													<td><?php echo $d->kode_simpan; ?></td>
													<td><?php echo $d->tgl_surat; ?></td>
													<td><?php echo $d->dari_kepada; ?></td>
													<td><?php echo $d->alamat; ?></td>
													<td><?php echo $d->perihal; ?></td>
													<td><?php echo $d->isi_ringkas; ?></td>
													<td><?php echo $d->catatan; ?></td>
												</tr>
											<?php }
										}
										else { ?>
												<tr>
													<td><?php echo $d->tgl_simpan; ?></td>
													<td><?php echo $d->no_surat; ?></td>
													<td><?php echo $d->unit; ?></td>
													<td><?php echo $d->kode_simpan; ?></td>
													<td><?php echo $d->tgl_surat; ?></td>
													<td><?php echo $d->dari_kepada; ?></td>
													<td><?php echo $d->alamat; ?></td>
													<td><?php echo $d->perihal; ?></td>
													<td><?php echo $d->isi_ringkas; ?></td>
													<td><?php echo $d->catatan; ?></td>
												</tr>
										<?php }
									} ?>
								</tbody>
							</table>
						</div>
						

    
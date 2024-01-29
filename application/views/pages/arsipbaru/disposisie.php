<?php

	error_reporting(0);

	header("Content-type: application/vnd-ms-excel");
 
  	header("Content-Disposition: attachment; filename=lembar_disposisi.xls");
 
?>

<?php foreach ($identitas as $ide) { ?>

	<table>
		<!-- <tr>
			<th><img src="<?php echo base_url('assets/img/'.$ide->logo); ?>" width="100" height="100" /></th>
		</tr> -->
		<tr>
			<th colspan="9">
				<?php echo $ide->nama; ?>
			</th>
		</tr>
		<tr>
			<th colspan="9">
				<?php echo $ide->alamat; ?>
			</th>
		</tr>
		<tr>
			<th colspan="9">
				Telp. <?php echo $ide->no_telp; ?>, email: <?php echo $ide->email; ?>, website: <?php echo $ide->web; ?>
			</th>
		</tr>
		<tr>
			<th></th>
		</tr>
	</table>

<br><br>

<?php
	foreach ($arsip as $arsip) {
		$teks = "$arsip->diteruskan_kepada"; 
		$potongan_teks = explode(",", $teks);
		$satu = $potongan_teks[0]; // data1
		$dua = $potongan_teks[1]; // data2
		$tiga = $potongan_teks[2]; // data3
		$empat = $potongan_teks[3]; // data4
		$lima = $potongan_teks[4]; // data5
?>
<table border="1" style="border-collapse:collapse;">
    <tr>
		<th colspan="9">LEMBAR DISPOSISI</th>
	</tr>
</table>

<br>

<table border="1" style="border-collapse:collapse;">
	<?php if($arsip->brsr == 'Rahasia') { ?>
		<tr>
			<th colspan="2">Rahasia</th>
			<td colspan="1" style="text-align:center">v</td>
			<th colspan="2">Penting</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
			<th colspan="2">Rutin</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
		</tr>
	<?php } else if($arsip->brsr == 'Penting') { ?>
		<tr>
			<th colspan="2">Rahasia</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
			<th colspan="2">Penting</th>
			<td colspan="1" style="text-align:center">v</td>
			<th colspan="2">Rutin</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
		</tr>
	<?php } else if($arsip->brsr == 'Rutin') { ?>
		<tr>
			<th colspan="2">Rahasia</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
			<th colspan="2">Penting</th>
			<td colspan="1" style="text-align:center;color:#fff">x</td>
			<th colspan="2">Rutin</th>
			<td colspan="1" style="text-align:center">v</td>
		</tr>
	<?php } ?>
	<!-- <tr>
		<th colspan="2">Rahasia</th>
		<td colspan="1" style="text-align:center">v</td>
		<th colspan="2">Penting</th>
		<td colspan="1" style="text-align:center">v</td>
		<th colspan="2">Rutin</th>
		<td colspan="1" style="text-align:center">v</td>
	</tr> -->
	<tr>
		<th colspan="2">No Agenda</th>
		<td colspan="7" style="text-align:center"><?php echo $arsip->no_surat; ?></td>
	</tr>
	<tr>
		<th colspan="2">Tanggal</th>
		<td colspan="7" style="text-align:center"><?php echo $arsip->tgl_surat; ?></td>
	</tr>
</table>

<br>

<table border="1" style="border-collapse:collapse;">
	<tr>
		<th colspan="2">Perihal</th>
		<td colspan="7" style="text-align:center"><?php echo $arsip->perihal; ?></td>
	</tr>
	<tr>
		<th colspan="2">Tanggal</th>
		<td colspan="7" style="text-align:center"><?php echo $arsip->tgl_diterima; ?></td>
	</tr>
	<tr>
		<th colspan="2">Asal</th>
		<td colspan="7" style="text-align:center"><?php echo "$arsip->dari_kepada - $arsip->kota"; ?></td>
	</tr>
	<tr>
		<th colspan="4">Instruksi / Informasi</th>
		<th colspan="5">Diteruskan Kepada</th>
	</tr>
	<tr>
		<td colspan="4" rowspan="5" style="text-align:center;"><?php echo $arsip->catatan; ?></td>
		<td colspan="5" style="text-align:center;"><?php echo $satu; ?></td>
	</tr>
	<tr>
		<td colspan="5" style="text-align:center;"><?php echo $dua; ?></td>
	</tr>
	<tr>
		<td colspan="5" style="text-align:center;"><?php echo $tiga; ?></td>
	</tr>
	<tr>
		<td colspan="5" style="text-align:center;"><?php echo $empat; ?></td>
	</tr>
	<tr>
		<td colspan="5" style="text-align:center;"><?php echo $lima; ?></td>
	</tr>
	<tr>
		<th colspan="2">Catatan</th>
		<td colspan="7" style="text-align:center;"><?php echo $arsip->penerima ?></td>
	</tr>
</table>

<?php }
	} ?>



<!-- 
<header id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-10">
				<h1><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Arsip Baru <small> Lembar Disposisi</small></h1>
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
            <li class="active">Lembar Disposisi</li>
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
						<h3 class="panel-title">Arsip Baru - Lembar Disposisi</h3>
					</div>
					<div class="panel-body">
                        <a href="<?php base_url(); ?>interne" class="btn btn-info" role="button">
                            <span class="glyphicon glyphicon-log-out"></span>
                            Ekspor Excel
                        </a>
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data->id_arsip; ?>" />
						</div>
						<div>
							<table class="table table-bordered table-hover" id="manageMemberTable" width="100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Kirim</th>
										<th>Tanggal dan No Surat</th>
										<th>Dikirim Kepada</th>
										<th>Nama Penerima</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($identitas as $ide) { ?>
									<?php foreach ($data as $d) { ?>
                                        <?php if (($d->jenis_surat == 'M')){?>
									<tr>
										<td><?php echo $d->id_arsip; ?></td>
										<td><?php echo $d->tgl_simpan; ?></td>
										<td><?php echo $d->tgl_surat; ?> / <a href="<?php echo base_url('arsip_baru/surat/'.$d->id_arsip);?>"><?php echo $d->no_surat; ?></a></td>
										<td><?php echo $d->dari_kepada; ?></td>
										<td><?php echo $d->arsiparis; ?></td>
										<td>
											<div class="dropdown">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="glyphicon glyphicon-cog"></span>
													<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<?php
														if (!$this->session->userdata('logged_in')) { ?>
															<li>
																<a href="<?php echo base_url('arsip_baru/view/'.$d->id_arsip); ?>" type="button">
																	Detail Data
																</a>
															</li>
															<li>
																<a href="<?php echo base_url('arsip_baru/cetak/'.$d->id_arsip); ?>" type="button">
																	Cetak Kartu Kendali
																</a>
															</li>
													<?php } else { ?>
															<li>
																<a href="<?php echo base_url('arsip_baru/view/'.$d->id_arsip); ?>" type="button">
																	Detail Data
																</a>
															</li>
															<li>
																<a href="<?php echo base_url('arsip_baru/cetak/'.$d->id_arsip); ?>" type="button">
																	Cetak Kartu Kendali
																</a>
															</li>
															<li>
																<a type="button" href="<?php echo base_url('arsip_baru/update/'.$d->id_arsip); ?>">
																	Ubah Data							
																</a>	
															</li>
															<li>
																<a type="button" onclick="return confirm('Apakah anda benar-benar ingin menghapus data ini?');" href="<?php echo base_url('arsip_baru/delete/'.$d->id_arsip); ?>">
																	Hapus Data
																</a>
															</li>
													<?php } ?>
												</ul>
											</div>
										</td>
									</tr>
									<?php } } } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
 -->